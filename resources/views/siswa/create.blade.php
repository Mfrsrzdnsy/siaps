@extends('admin.admin_dashboard')

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Tambah Data</h4>
                        <form id="signupForm" method="POST" action="{{ route('siswa.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="nis" class="form-label">NIS</label>
                                <input id="nis" class="form-control" name="nis" type="text">
                                @error('nis')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input id="nama" class="form-control" name="nama" type="text">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis Kelamin</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="jenis_kelamin" id="gender1" value="laki-laki">
                                        <label class="form-check-label" for="gender1">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="jenis_kelamin" id="gender2" value="perempuan">
                                        <label class="form-check-label" for="gender2">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>                            
                            <div class="mb-3">
                                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                <input id="tempat_lahir" class="form-control" name="tempat_lahir" type="text">
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                <input id="tanggal_lahir" class="form-control mb-4 mb-md-0" name="tanggal_lahir"
                                    type="date">
                            </div>
                            <div class="mb-3">
                                <label for="defaultconfig-4" class="col-form-label">Alamat</label>
                                <textarea id="maxlength-textarea" class="form-control" name="alamat" maxlength="100" rows="8"
                                    placeholder="Masukan Alamat..."></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="tempat_lahir" class="form-label">Pendidikan Terakhir</label>
                                <input id="tempat_lahir" class="form-control" name="pendidikan_terakhir" type="text">
                            </div>
                            <div class="mb-3">
                                <label for="defaultconfig-4" class="col-form-label">Deskripsi</label>
                                <textarea id="maxlength-textarea" class="form-control" name="deskripsi" maxlength="100" rows="8"
                                    placeholder="Masukan Deskripsi..."></textarea>
                            </div>
                    </div>
                    <div>
                        
                    <button type="submit" class="btn btn-primary"> Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
