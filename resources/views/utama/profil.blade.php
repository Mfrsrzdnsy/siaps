
{{-- menu home menggunakan layout main dan beritahunkan dengan menggunakan @extends() --}}
@extends('layouts.home')

{{-- apapun yang berada didalam section akan masuk mengantikan @yield pada main.blade --}}
@section('container')

<div class="card border border-0 shadow" >
    <div class="card-body">
      <h3 class="card-title text-center mb-4">Sistem Informasi Anak Putus Sekolah</h3>
      <p class="card-text">
        Jumlah anak putus sekolah adalah salah satu permasalahan yang dapat menghambat
        kemajuan dan daya saing bangsa. Sebagai generasi yang akan menjalankan
        peran besar di masa depan, anak-anak memiliki hak untuk mengenyam pendidikan.
        Oleh karena itu, dalam upaya untuk menekan jumlah anak putus sekolah, SIAPS hadir
        untuk membantu mendata anak yang putus sekolah guna memberikan informasi secara real-time
        kepada publik maupun pihak-pihak yang memerlukan informasi tersebut agar dapat mengambil kebijakan
        yang diperlukan agar anak-anak tersebut dapat mengenyam pendidikan kembali.
      </p>
    </div>
</div>

@endsection

<section style="background-image: url(./image/anak.jpg); background-size: cover; background-repeat: no-repeat; height: 800px;">
