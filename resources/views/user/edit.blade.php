@extends('admin.admin_dashboard')

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Edit Data</h4>
                        <form id="signupForm" method="POST" action="{{ route('user.update', $data->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input id="nama" value="{{ $data->name }}" class="form-control" name="nama"
                                    type="text">
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input id="username" value="{{ $data->username }}" class="form-control" name="username"
                                    type="text">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" value="{{ $data->email }}" class="form-control" name="email"
                                    type="text">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" value="{{ $data->password }}" class="form-control"
                                    name="password" type="text">
                            </div>
                            
                            <div class="mb-3">
                                <label for="defaultconfig-4" class="col-form-label">Alamat</label>
                                <textarea id="maxlength-textarea" class="form-control" name="alamat" maxlength="100" rows="8"
                                    placeholder="Masukan Alamat...">{{ $data->alamat }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Foto</label>
                                    <input class="form-control" name="foto" type="file" id="image">
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary"> Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
