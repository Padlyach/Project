<x-app-layout>

<div class="relative overflow-x-auto">

                <a href="siswa/create" >
                 <button class="mt-3 ml-2 relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                Tambah Data
                </span>
                </button>   
                </a>
                
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Tempat Lahir
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal Lahir
                </th>
                <th scope="col" class="px-6 py-3">
                    Alamat
                </th>
                <th scope="col" class="px-6 py-3">
                    Asal Sekolah
                </th>
                <th scope="col" class="px-6 py-3">
                   Email
                </th>
                <th scope="col" class="px-6 py-3">
                   Foto
                </th>
                <th scope="col" class="px-6 py-3">
                   Scan KK
                </th>
                <th>
                    Action
                </th>
            </tr>
        </thead>

        <tbody>
                            @forelse ($siswa as $siswa)
                            <tr class="border-b dark:border-gray-700">
                                <td class="px-4 py-3">{{ $siswa->nama_lengkap}}</td>
                                <td class="px-4 py-3">{{ $siswa->tempat_lahir }}</td>
                                <td class="px-4 py-3">{{ $siswa->tanggal_lahir}}</td>
                                <td class="px-4 py-3">{{ $siswa->alamat}}</td>
                                <td class="px-4 py-3">{{ $siswa->asal_sekolah }}</td>
                                <td class="px-4 py-3">{{ $siswa->email }}</td>

                                <td class="px-4 py-3"><img src="{{ asset('/storage/siswa/' . $siswa->foto) }}" 
                                class="rounded" style="width: 150px"></td>

                                <td class="px-4 py-3"><img src="{{ asset('/storage/siswa/' . $siswa->scan_kk) }}" 
                                class="rounded" style="width: 150px"></td>
                                
                              
<td>

<a href="{{route('siswa.show',$siswa->id)}}"> 
<button class="mt-2 relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800">
<span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
DETAIL
</span>
</button>
</a>

<form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST"
                                            onsubmit="return confirm('yakin mau ngapusss?');">

                                            @csrf
                                            @method('DELETE')
                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                DELATE
                </span>
                </button>
</form>

</td>
                                
                                @empty
                           
                            </tr>
                            

                            @endforelse
                            
                        </tbody>
    </table>
</div>

</x-app-layout>