<x-app-layout>

<div class="relative overflow-x-auto">

                <a href="jurusan/create">
                <button class="mt-3 ml-2 relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                Tambah Data
                </span>
                </button>
                </a>

                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                <th scope="col" class="px-6 py-3">
                    Jurusan 
                </th>
                <th scope="col" class="px-6 py-3">
                    Detail
                </th>
                <th>
                    Action
                </th>
                </tr>
                </thead>
   <tbody>
            @forelse ($jurusan as $jurusan)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $jurusan->jurusan}}
                </th>
                <td class="px-6 py-4">
                    {{ $jurusan->detail}}
                </td>

<td>

<a href="{{route('jurusan.show',$jurusan->id)}}"> 
<button class="mt-2 relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800">
<span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
DETAIL
</span>
</button>
</a>


<form action="{{ route('jurusan.destroy', $jurusan->id) }}" method="POST"
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
            </tr>

            @empty
            
            @endforelse
        </tbody>

                </table>
             
               

   
</div>

</x-app-layout>