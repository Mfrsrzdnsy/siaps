
{{-- menu home menggunakan layout main dan beritahunkan dengan menggunakan @extends() --}}
@extends('layouts.home')

{{-- apapun yang berada didalam section akan masuk mengantikan @yield pada main.blade --}}
@section('container')


@endsection
  
<section style="background-image: url(./image/anak.jpg); background-size: cover; background-repeat: no-repeat; height: 800px;">
 