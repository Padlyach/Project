<?php

namespace App\Http\Controllers;


use App\Models\Siswa;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::latest()->paginate(10);
        return view('siswa.index',compact('siswa'));
    }

    public function create()
    {
       return view('siswa.create');
    }

    public function store(Request $request)
    {
        try {
            //code...
        
        // Validate the incoming request data
        $request->validate([
            'nama_lengkap' => 'required|string|min:5', 
            'tempat_lahir' => 'required|string|min:5',
            'tanggal_lahir' => 'required|string|min:5',
            'alamat' => 'required|string|min:5',
            'asal_sekolah' => 'required|string|min:5',
            'email' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'scan_kk' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);
    
        $foto = $request->file('foto');
        $foto->storeAs('foto', $foto->hashName(), 'public'); 
    
        $scan_kk = $request->file('scan_kk');
        $scan_kk->storeAs('scan_kk', $scan_kk->hashName(), 'public'); 
    
        $siswa = Siswa::create([
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'asal_sekolah' => $request->asal_sekolah,
            'email' => $request->email,
            'foto' => 'foto/'.$foto->hashName(),
            'scan_kk' => 'scan_kk/'.$scan_kk->hashName(),
        ]);

        
    } catch (\Throwable $th) {
        dd($th->getMessage());
    }
        return redirect()->route('siswa.index');
    }

    public function show($id)
    {
        $siswa = Siswa ::findOrFail($id);
        return view('siswa/show',compact('siswa'));
    }

    public function destroy(string $id): RedirectResponse
    {
        // Cari produk berdasarkan ID
        $siswa = Siswa ::findOrFail($id);
    
    
        // Hapus produk dari database
        $siswa->delete();
    
        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Dihapus']);
    }


}
