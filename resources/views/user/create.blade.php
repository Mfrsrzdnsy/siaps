@extends('admin.admin_dashboard')

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Tambah Data</h4>
                        <form id="signupForm" method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input id="nama" class="form-control" name="nama" type="text">
                                </div>
                                <div class="col-md-6">
                                    <label for="username" class="form-label">User Name</label>
                                    <input id="username" class="form-control" name="username" type="text">
                                    @error('username')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input id="email" class="form-control" name="email" type="email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="password" class="form-label">Password</label>
                                    <input id="password" class="form-control" name="password" type="password">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="no_telp" class="form-label">No Telpon</label>
                                    <input id="no_telp" class="form-control" name="no_telp" type="text">
                                    @error('no_telp')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Role</label>
                                    <select name="role" class="form-select" aria-label="Default select example" required>
                                        <option value="">--- Pilih Role ---</option>
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="defaultconfig-4" class="col-form-label">Alamat</label>
                                    <textarea id="maxlength-textarea" class="form-control" name="alamat" maxlength="100" rows="8"
                                        placeholder="Masukan Alamat..."></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <label for="exampleInputEmail1" class="form-label"></label>
                                    <img id="showImage" class="wd-80 rounded-circle" src="{{ (!empty($profileData->foto)) ? 
                                        url('upload/admin_images'.$profileData->foto) : url('upload/no_image.jpg') }}" alt="profile" />
                                </div>
                                <div class="col-md-10">
                                    <label for="exampleInputEmail1" class="form-label">Foto</label>
                                    <input class="form-control" name="foto" type="file" id="image">
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
    @endsection

    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    
    </script>
