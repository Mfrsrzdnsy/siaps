
{{-- menu home menggunakan layout main dan beritahunkan dengan menggunakan @extends() --}}
@extends('layouts.home')

{{-- apapun yang berada didalam section akan masuk mengantikan @yield pada main.blade --}}
@section('container')

<div class="card border border-0">
    <div class="card-body text-center">
        <h3 class="mb-4"><i class="bi bi-telephone"></i> Hubungi Kami</h3>
        <p class="lead mb-4">Kami siap membantu Anda. Hubungi kami melalui telepon atau email.</p>
        <h5 class="mb-3"><i class="bi bi-phone"></i> Telp. 08*********</h5>
        <h5><i class="bi bi-envelope-at"></i> Email: siaps@gmail.co.id</h5>
    </div>
</div>

@endsection

<section style="background-image: url(./image/anak.jpg); background-size: cover; background-repeat: no-repeat; height: 800px;">
