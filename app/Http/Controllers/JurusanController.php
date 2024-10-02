<?php

namespace App\Http\Controllers;


use App\Models\Jurusan;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusan = Jurusan::latest()->paginate(10);
        return view('jurusan.index',compact('jurusan'));
    }

    public function create()
    {
       return view('jurusan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jurusan' => 'required|min:5',
            'detail' => 'required|min:5',
        ]);
        $jurusan = jurusan::create([
            'jurusan' => $request->jurusan,
            'detail' => $request->detail,
        ]);

        return redirect()->route('jurusan.index');
    }

    public function show($id)
    {
        $jurusan = Jurusan ::findOrFail($id);
        return view('jurusan/show',compact('jurusan'));
    }

    public function destroy(string $id): RedirectResponse
    {
        // Cari produk berdasarkan ID
        $jurusan = Jurusan ::findOrFail($id);
    
    
        // Hapus produk dari database
        $jurusan->delete();
    
        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('jurusan.index')->with(['success' => 'Data Berhasil Dihapus']);
    }

}
