
{{-- menu home menggunakan layout main dan beritahunkan dengan menggunakan @extends() --}}
@extends('layouts.home')

{{-- apapun yang berada didalam section akan masuk mengantikan @yield pada main.blade --}}
@section('container')

<div class="card">
  
    <div class="card-body">
      <h3 class="text-center">Selamat Datang</h3>
      <h5 class="text-center">Sistem Informasi Anak Putus Sekolah</h5>
    </div>
  </div>
  
@endsection
  
<section style="background-image: url(./image/anak.jpg); background-size: cover; background-repeat: no-repeat; height: 800px;">
 