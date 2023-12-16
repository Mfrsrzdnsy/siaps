@extends('admin.admin_dashboard')

@section('content')
<div class="page-content">

    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Data Siswa</h6>
            <div class="d-flex justify-content-end">
                <a href="{{ route('siswa.tambah') }}" class="btn btn-primary ml-auto">Tambah Data</a>
            </div>
            <div class="table-responsive">
              <table id="dataTableExample" class="table">
                <thead>
                  <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Pendidikan Terakhir</th>
                    <th>Deskripsi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($siswas as $siswa)
                    <tr>
                      <td>{{ $siswa->nis }}</td>
                      <td>{{ $siswa->nama }}</td>
                      <td>{{ $siswa->jenis_kelamin }}</td>
                      <td>{{ $siswa->tempat_lahir }}</td>
                      <td>{{ $siswa->tanggal_lahir }}</td>
                      <td>{{ $siswa->alamat }}</td>
                      <td>{{ $siswa->pendidikan_terakhir }}</td>
                      <td>{{ $siswa->deskripsi }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection