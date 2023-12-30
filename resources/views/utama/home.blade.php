
{{-- menu home menggunakan layout main dan beritahunkan dengan menggunakan @extends() --}}
@extends('layouts.home')

{{-- apapun yang berada didalam section akan masuk mengantikan @yield pada main.blade --}}
@section('container')

<div class="card bg-white border border-0"  style="font-size: 40px; color: #000000; --bs-bg-opacity: .2;">
  <div class="card-body">
    <p class="text-center">Selamat Datang</p>
    <h3 class="text-center">Sistem Informasi Anak Putus Sekolah</h3>
  </div>
</div><br>

<div class="page-content height: 200px">
  <main>
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
          </div>
          <div class="carousel-inner bg-transparent" style="--bs-bg-opacity: .5;">
            <div class="carousel-item">
              <div class="container mb-3">
                <div class="card bg-white border border-0" style="font-size: 20px; color: #000000; --bs-bg-opacity: .5;">
                  <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-lightbulb"></i>Sekilas Info</h5>
                    <p class="text-md-center">Faktor ekonomi, menjadi salah satu penyebab tingginya tingkat putus sekolah di Indonesia. Jarak tempuh yang jauh antara rumah dan sekolah dan ditempuh dengan berjalan kaki yang cukup jauh, membuat anak-anak yang tinggal di pelosok pedesaaan, perbukitan, menjadi kendala terbesar karena kurangnya akses mereka untuk berangkat ke sekolah.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item active">
              <div class="container">
                <div class="card bg-white border border-0" style="font-size: 20px; color: #000000; --bs-bg-opacity: .5;">
                  <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-lightbulb"></i>Sekilas Info</h5>
                    <p class="text-md-center">Tahun 2023 anggaran pendidikan mengalami kenaikan dari tahun sebelumnya. Anggaran pendidikan tahun 2023 sebesar 612,2 triliun meningkat dari tahun 2022 sebesar 574,9 triliun. Ironisnya, kenaikan anggaran pendidikan sejalan dengan bertambahnya jumlah anak putus sekolah di Indonesia pada tingkat SD, SMA dan SMK.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="card bg-white border border-0"  style="font-size: 20px; color: #000000; --bs-bg-opacity: .5;">
                  <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-lightbulb"></i>Sekilas Info</h5>
                    <p class="text-md-center">Jumlah anak putus sekolah jenjang Sekolah Dasar (SD) tahun 2022/2023 berjumlah 40.623 anak, yang mengalami peningkatan dari tahun ajaran 2021/2022 yang berjumlah 38.716 anak. Anak putus sekolah jenjang SMP tahun ajaran 2022/2023 berjumlah 13.716 anak, mengalami penurun dari tahun ajaran 2021/2022 yang berjumlah 15.042 anak. Sedangkan anak putus sekolah tingkat SMA tahun ajaran 2022/2023 berjumlah 10.091 anak, mengalami peningkatan dari tahun ajaran 2021/2022 yang berjumlah 10.055 anak dan di tingkat SMK jumlah anak putus sekolah tahun 2022/2023 berjumlah 12.404 anak, yang mengalami peningkatan dari tahun ajaran 2021/2022 yang berjumlah 12.063 anak (statistik.data.kemdikbud.go.id).</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
  </main>
</div>
  
@endsection
  
<section style="background-image: url(./image/anak.jpg); background-size: cover; background-repeat: no-repeat; height: 800px;">
 