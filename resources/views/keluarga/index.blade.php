@extends('admin.admin_dashboard')

@section('content')
    <div class="page-content">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Data Anak</h6>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('keluarga.create') }}" class="btn btn-primary ml-auto">Tambah Data</a>
                        </div>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Nama Ayah</th>
                                        <th>Nama Ibu</th>
                                        <th>Jumlah Saudara</th>
                                        <th>Pendidikan Terakhir Ayah</th>
                                        <th>Pendidikan Terakhir Ibu</th>
                                        <th>Alamat</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($keluargas as $keluarga)
                                        <tr>
                                            <td>{{ $keluarga->nama }}</td>
                                            <td>{{ $keluarga->nama_ayah }}</td>
                                            <td>{{ $keluarga->nama_ibu }}</td>
                                            <td>{{ $keluarga->jumlah_saudara }}</td>
                                            <td>{{ $keluarga->pendidikan_terakhir_ayah }}</td>
                                            <td>{{ $keluarga->pendidikan_terakhir_ibu }}</td>
                                            <td>{{ $keluarga->alamat }}</td>
                                            <td style="display: flex">
                                                <button type="button" class="btn btn-primary" style="margin-right: 5px;"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#memberModal_{{ $keluarga->id_keluarga }}"><i class="far fa-eye"></i></button>
                                                <div class="modal fade" id="memberModal_{{ $keluraga->id_keluarga }}"
                                                    tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail
                                                                </h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card mx-auto" style="width: 25rem;">
                                                                    <div class="card-body">
                                                                        <table class="table" border="0">
                                                                            <tr>
                                                                                <td>Nama</td>
                                                                                <td>: {{ $keluarga->nama }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Nama Ayah</td>
                                                                                <td>: {{ $keluarga->nama_ayah }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                            <tr>
                                                                                <td>Nama Ibu</td>
                                                                                <td>: {{ $keluarga->nama_ibu }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Jumlah Saudara</td>
                                                                                <td>: {{ $keluarga->jumlah_saudara }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Pendidikan Terakhir Ayah</td>
                                                                                <td>: {{ $keluarga->pendidikan_terakhir_ayah }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Pendidikan Terakhir Ibu</td>
                                                                                <td>: {{ $keluarga->pendidikan_terakhir_ibu }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Alamat</td>
                                                                                <td>: {{ $siswa->alamat }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Deskripsi</td>
                                                                                <td>: {{ $siswa->deskripsi }}</td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="{{ route('siswa.edit', $keluarga->id_keluarga) }}" class="btn btn-warning"
                                                    style="margin-right: 5px;"><i class="far fa-edit"></i></a>
                                                <form method="POST" action="{{ route('siswa.destroy', $keluarga->id_keluarga) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" style="margin-right: 5px;"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus member ini?')"><i class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </td>
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
