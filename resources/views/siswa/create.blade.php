<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">TAMBAH DATA SISWA</h2>
            <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- @csrf ensures that the request sent to the server is from a valid form -->
             
                <div class="mt-5 grid gap-4 sm:grid-cols-2 sm:gap-6">
                 
                    <div class="mt-2 w-full">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NAMA</label>
                    <input type="text" name="nama_lengkap" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required>
                    </div>

                    <div class="mt-2 w-full">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TEMPAT LAHIR</label>
                    <input type="text" name="tempat_lahir" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required>
                    </div>
                   
                    <div class="mt-2 w-full">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TANGGAL LAHIR</label>
                    <input type="text" name="tanggal_lahir" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required>
                    </div>

                    <div class="mt-2 w-full">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ALAMAT</label>
                    <input type="text" name="alamat" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required>
                    </div>

                    <div class="mt-2 w-full">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ASAL SEKOLAH</label>
                    <input type="text" name="asal_sekolah" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required>
                    </div>

                    <div class="mt-2 w-full">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">EMAIL</label>
                    <input type="text" name="email" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required>
                    </div>
                </div>

                <label class="mt-5 block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">FOTO</label>
                <input name="foto" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">

                <br>

                <label class="mt-5 block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">SCAN KK</label>
                <input name="scan_kk" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">


                <button type="submit" class="mt-5 inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Add product
                </button>
            </form>
        </div>
    </section>
</body>
</html>