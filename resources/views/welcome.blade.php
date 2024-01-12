<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

        <!-- Styles -->
        <style>
            body {
                background-image: url('./image/anak.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                height: 800px;
                margin: 0; /* Menghilangkan margin default dari body */
            }

            .overlay {
                /* Tambahkan overlay jika diperlukan */
                background-color: rgba(0, 0, 0, 0.5); /* Ubah warna sesuai kebutuhan */
                height: 100%;
            }

            /* Tambahkan gaya tambahan sesuai kebutuhan */
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        {{-- <a href="{{ url('/home') }}" class="btn btn-danger">Home</a> --}}
                    @else
                        {{-- <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a> --}}

                        @if (Route::has('register'))
                            {{-- <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a> --}}
                        @endif
                    @endauth
                </div>
            @endif


        </div>

        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 fw-normal">Si<span style="color: blue">Aps</span></h1>
                <p class="lead fw-normal" style="color: #000000; ">
                    Kami berharap bahwa Sistem Informasi Anak Putus Sekolah ini dapat menjadi
                    jembatan yang kuat untuk membantu mengatasi masalah putus sekolah
                </p>
                <a class="btn btn-secondary" href="{{ url('/home') }}">Go to Home</a>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
