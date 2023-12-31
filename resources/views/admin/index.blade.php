@extends('admin.admin_dashboard')
@section('content')

<div class="page-content">

  <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
      <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
    </div>
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Total Anak Putus sekolah</h5>
          <h2 class="card-text">{{  $totalSiswa }} <i class="bi bi-person-fill"></i></h2>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Total User</h5>
          <h2 class="card-text">{{ $totalUser }} <i class="bi bi-person-fill"></i></h2>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Total Admin</h5>
          <h2 class="card-text">{{ $totalAdmin }} <i class="bi bi-person-fill"></i></h2>
        </div>
      </div>
    </div>
  </div><br>

  <div class="card bg-black border border-"  style=" --bs-bg-opacity: .1;">
    <div class="card-body">
      <p class="text-center" style="font-size: 20px; color: #ffffff;">Ini Adalah Sistem Informasi Anak Putus Sekolah
      </p><br>
      <p class="text-center" style="font-size: 15px; color: #ffffff;">Anak putus sekolah adalah murid yang tidak dapat menyelesaikan program belajar sebelum waktunya selesai atau murid yang tidak tamat menyelesaikan program belajarnya. Akibat yang disebabkan anak putus sekolah sangat banyak, diantaranya adalah meningkatnya jumlah pengangguran,tawuran dan kebut-kebutan dijalan raya, minum-minuman keras dan perkelahian dan akibat lainnya juga perasaan minder dan rendah diri karena kurangnya pengetahuan yang dimiliki. Jumlah anak putus sekolah di Indonesia cukup banyak, ini terlihat dari banyaknya anak usia sekolah yang mengamen, mengemis di jalanan pada jam-jam sekolah, bahkan ada yang menjadi pemulung dan lebih memilih membantu orang tuanya dalam mencari nafkah. Hal inilah yang membuat kesadaran akan pendidikan menjadi rendah dan mengurangi motivasi untuk belajar.</p>
    </div>
  </div>

</div>

@endsection