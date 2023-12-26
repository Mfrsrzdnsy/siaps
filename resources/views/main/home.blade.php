
{{-- menu home menggunakan layout main dan beritahunkan dengan menggunakan @extends() --}}
@extends('layouts.home')

{{-- apapun yang berada didalam section akan masuk mengantikan @yield pada main.blade --}}
@section('container')

  <div class="card bg-white border border-0"  style="font-size: 40px; color: #000000; --bs-bg-opacity: .2;">
    <div class="card-body">
      <p class="text-center">Selamat Datang</p>
      <h3 class="text-center">Sistem Informasi Anak Putus Sekolah</h3>
    </div>
  </div> <br>

  <div class="card bg-white border border-0"  style="font-size: 20px; color: #000000; --bs-bg-opacity: .5;">
    <div class="card-body">
      <h5 class="card-title"><i class="bi bi-lightbulb"></i>Sekilas Info</h5>
      <p class="card-text">Jumlah anak putus sekolah jenjang Sekolah Dasar (SD) tahun 2022/2023 berjumlah 40.623 anak, yang mengalami peningkatan dari tahun ajaran 2021/2022 yang berjumlah 38.716 anak (statistik.data.kemdikbud.go.id).</p>
    </div>
  </div>

@endsection
  
<section style="background-image: url(./image/anak.jpg); background-size: cover; background-repeat: no-repeat; height: 800px;">
 