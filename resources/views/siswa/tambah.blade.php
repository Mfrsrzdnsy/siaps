@extends('admin.admin_dashboard')

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Tambah Data</h4>
                        <form id="signupForm" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">NIS</label>
                                <input id="name" class="form-control" name="nis" type="text">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input id="name" class="form-control" name="nama" type="text">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis Kelamin</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="gender_radio" id="gender1">
                                        <label class="form-check-label" for="gender1">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="gender_radio" id="gender2">
                                        <label class="form-check-label" for="gender2">
                                            Perempuan
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="gender_radio" id="gender3">
                                        <label class="form-check-label" for="gender3">
                                            Lainnya
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Tempat Lahir</label>
                                <input id="name" class="form-control" name="tempat_lahir" type="text">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Lahir</label>
                                <input class="form-control mb-4 mb-md-0" type="date">
                            </div>
                            <div class="mb-3">
                                <label for="defaultconfig-4" class="col-form-label">Alamat</label>
                                <textarea id="maxlength-textarea" class="form-control" maxlength="100" rows="8"
                                    placeholder="Masukan Alamat..."></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="defaultconfig-4" class="col-form-label">Deskripsi</label>
                                <textarea id="maxlength-textarea" class="form-control" maxlength="100" rows="8"
                                    placeholder="Masukan Deskripsi..."></textarea>
                            </div>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
