<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <H1 class="text-center text-4xl font-bold p-11">DETAIL JURUSAN</H1>



    <section class="bg-gray-50  p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white relative shadow-md sm:rounded-lg overflow-hidden">
                <section class="bg-white">
                    <div class="mx-auto max-w-4xl">

                        <div class="p-6">

                            <div class="grid grid-cols-2 gap-2">
                                <div>
               

                                    <div class="sm:col-span-2">
                                        {!! $siswa->nama_lengkap !!}
                                    </div> 
                                    <div class="sm:col-span-2">
                                        {!! $siswa->tempat_lahir !!}
                                    </div>  
                                    <div class="sm:col-span-2">
                                        {!! $siswa->alamat !!}
                                    </div>  
                                    <div class="sm:col-span-2">
                                        {!! $siswa->asal_sekolah !!}
                                    </div>  
                                    <div class="sm:col-span-2">
                                        {!! $siswa->email !!}
                                    </div> 
                                    <div class="sm:col-span-2">
                                        {!! $siswa->detail !!}
                                    </div> 
                                <div> <img src="{{ asset('/storage/siswa/' . $siswa->foto) }}" class="rounded"
                                        style="width: 100%">
                                </div>
                                <div> <img src="{{ asset('/storage/siswa/' . $siswa->scan_kk) }}" class="rounded"
                                        style="width: 100%">
                                </div>
                                </div>
                            </div>


                        </div>

                <!-- <a href="">
                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                BACK
                </span>
                </button>
                </a> -->
                

                    </div>
                </section>

            </div>
        </div>
    </section>

    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

</body>

</html>
