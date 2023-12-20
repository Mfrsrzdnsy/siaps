
@extends('layouts.main')

@section('container')

<form>
    <fieldset>
        <legend>Kirimkan Pesan Anda </legend>
    <div class="mb-3">
        <label for="inputNama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
    <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Pesan</label>
    </div><br>
    <button class="btn btn-outline-secondary" type="button">Kirim Pesan</button>
    </fieldset>
</form>
@endsection    
