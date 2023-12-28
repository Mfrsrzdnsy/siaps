
{{-- menu home menggunakan layout main dan beritahunkan dengan menggunakan @extends() --}}
@extends('layouts.home')

{{-- apapun yang berada didalam section akan masuk mengantikan @yield pada main.blade --}}
@section('container')

<div class="card">
  
    <div class="card-body">
      <h3 class="text-center">Selamat Datang</h3>
      <h5 class="text-center">Sistem Informasi Anak Putus Sekolah</h5>
      <div class="page-content">
    
        <main>
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
                  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item">
                    <img src="{{ asset('image/anak3.jpeg') }}" alt="First slide" class="d-block w-100" style="opacity: 0.7;">
            
                    <div class="container mb-3">
                      <div class="carousel-caption text-start">
                        <h1>Ketika pintu sekolah tertutup. </h1>
                        <p>Lihatlah ke sekitarmu, ada banyak pintu lain yang bisa kamu buka untuk mencapai cita-citamu.</p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item active">
                    <img src="{{ asset('image/anak.jpg') }}" alt="Second slide" class="d-block w-100" style="opacity: 0.7;">
            
                    <div class="container">
                      <div class="carousel-caption">
                        <h1>Saat kamu berpikir untuk menyerah.</h1>
                        <p>Ingatlah bahwa pendidikan adalah kunci kesuksesan. Teruslah berjuang untuk meraih impianmu.</p>
                        
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('image/anak2.jpg') }}" alt="Third slide" class="d-block w-100" style="opacity: 0.7;">
                    <div class="container">
                      <div class="carousel-caption text-end">
                        <h1>Keluar dari situasi sulit memerlukan dukungan.</h1>
                        <p>Temukan orang-orang yang percaya pada potensimu dan ingin membantu kamu mencapai kesuksesan.</p>
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
    </div>
  </div>
  
@endsection
  
<section style="background-image: url(./image/anak.jpg); background-size: cover; background-repeat: no-repeat; height: 800px;">
 