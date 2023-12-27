@extends('admin.admin_dashboard')
@section('content')

    <style>
       
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      
    </style>
<div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
        </div>
    </div>

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
                    <p>Temukan orang-orang yang percaya pada potensimu dan ingin membantu kamu mencapai kesuksesan.</p>
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