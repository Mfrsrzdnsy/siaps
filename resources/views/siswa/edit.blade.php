@extends('admin.admin_dashboard')

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Edit Data</h4>
                        <form id="signupForm" method="POST" action="{{ route('siswa.update', $data->id_siswa) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="nis" class="form-label">NIS</label>
                                    <input id="nis" value="{{ $data->nis }}" class="form-control" name="nis"
                                        type="text">
                                </div>
                                <div class="col-md-6">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input id="nama" value="{{ $data->nama }}" class="form-control" name="nama" type="text">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                    <input id="tempat_lahir" value="{{ $data->tempat_lahir }}" class="form-control" name="tempat_lahir" type="text">
                                </div>

                                <div class="col-md-6">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                        <div class="input-group flatpickr" id="flatpickr-date">
                                            <input type="text" value="{{ $data->tanggal_lahir }}"    id="tanggal_lahir" name="tanggal_lahir" class="form-control flatpickr-input"
                                                placeholder="Select date" data-input="" readonly="readonly">
                                            <span class="input-group-text input-group-addon" data-toggle="">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-calendar">
                                                    <rect x="3" y="4" width="18" height="18" rx="2"
                                                        ry="2"></rect>
                                                    <line x1="16" y1="2" x2="16"
                                                        y2="6"></line>
                                                    <line x1="8" y1="2" x2="8"
                                                        y2="6"></line>
                                                    <line x1="3" y1="10" x2="21"
                                                        y2="10"></line>
                                                </svg>
                                            </span>
                                        </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Jenis Kelamin </label>
                                    <div class="form-check form-check-inline" style="display: block;
                                    margin-bottom: 10px;">
                                        <input @if ($data->jenis_kelamin === 'laki-laki') checked @endif type="radio" class="form-check-input" name="jenis_kelamin" id="gender1"
                                            value="laki-laki">
                                        <label class="form-check-label" for="gender1">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input @if ($data->jenis_kelamin === 'perempuan') checked @endif type="radio" class="form-check-input" name="jenis_kelamin" id="gender2"
                                            value="perempuan">
                                        <label class="form-check-label" for="gender2">Perempuan</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="pendidikan_terakhir" class="form-label">Pendidikan Terakhir</label>
                                    <input id="pendidikan_terakhir" class="form-control" value="{{ $data->pendidikan_terakhir }}" name="pendidikan_terakhir"
                                        type="text">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="defaultconfig-4" class="col-form-label">Alamat</label>
                                    <textarea id="maxlength-textarea" class="form-control" name="alamat" maxlength="100" rows="8"
                                        placeholder="Masukan Alamat...">{{ $data->alamat }}</textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="defaultconfig-4" class="col-form-label">Deskripsi</label>
                                    <textarea id="maxlength-textarea" class="form-control" name="deskripsi" maxlength="100" rows="8"
                                        placeholder="Masukan Deskripsi...">{{ $data->deskripsi }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Field formulir yang sudah ada... -->

                                <div class="col-md-6">
                                    <label for="foto" class="form-label">Foto</label> <br>
                                    <img src="{{ asset('storage/' . $data->foto) }}" width="70px" alt="" class="mb-3">
                                    <input id="foto" class="form-control" name="foto" type="file">
                                    @error('photo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary"> Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
