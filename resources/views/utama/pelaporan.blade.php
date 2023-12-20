@extends('layouts.main')

@section('container')

{{-- form pelaporan --}}


  <form>
    <fieldset>
        <legend>Pelaporan Anak Putus Sekolah</legend>
      
    <div class="mb-3">
        <label for="inputNama" class="form-label">Nama Pelapor</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Nama Lengkap">
    </div>
    <div class="mb-3">
        <label for="inputNIK" class="form-label">NIK Pelapor</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Nomor Induk Kependudukan">
    </div>
    <div class="mb-3">
        <label for="inputNoTelepon" class="form-label">No Telepon Pelapor</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="No Telepon">
    </div>
    <div class="mb-3">
        <label for="inputAlamat" class="form-label">Alamat Pelapor</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Alamat Lengkap">
    </div><br>

    <div class="mb-3">
        <label for="inputAddress" class="form-label">Nama Anak Putus Sekolah</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Nama Lengkap">
    </div>
    <div class="mb-3">
        <label for="inputAddress" class="form-label">Alamat Anak Putus Sekolah</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Alamat Lengkap">
    </div>

    <div class="mb-3">
        <label for="inputAddress" class="form-label">Jenis Kelamin </label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
             Laki-laki
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              Perempuan
            </label>
          </div>
    </div>

    <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Alasan Putus Sekolah</label>
    </div><br>

    <button type="submit" class="btn btn-primary">Submit</button>
    
    </fieldset>
    </form>

    
@endsection