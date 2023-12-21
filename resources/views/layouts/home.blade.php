<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="style.css"> --}}
    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  </head>
  <body>
    
    
      
      {{-- beritahukan bahwa disini akan tersimpan sebuah navbar yang diambil dari halaman parsial.navbar --}}
      @include('partials.navbarhome')
      

      {{-- mt=margin top --}}
      <div class="container mt-4">
       @yield('container')
      </div>
      <div class="container" style="background-color: white;height:40%;border-radius: 20px">
        <h1 class="display-4 fw-bold text-body-emphasis text-center pt-3" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Selamat Datang</h1>
        <p class="text-center">Website Sistem Informasi Anak Putus Sekolah</p>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item text-center pt-3">
            <button type="button" class="btn btn-outline-dark me-2 ">
            <a class="nav-link {{ ($title === "login") ? 'active' : '' }}" href="/login"></i>Login untuk melanjutkan</a>
          </li>
        </ul>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
