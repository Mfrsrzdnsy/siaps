@extends('admin.admin_dashboard')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="row profile-body">
            <!-- left wrapper start -->
            <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
                <div class="card rounded">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div>

                                <img class="wd-100 rounded-circle"
                                    src="{{ !empty($profileData->foto) ? url('upload/admin_images' . $profileData->foto) : url('upload/no_image.jpg') }}"
                                    alt="profile" />
                                <span class="h4 ms-3">{{ $profileData->username }}</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Nama :</label>
                            <p class="text-muted">{{ $profileData->name }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Email :</label>
                            <p class="text-muted">{{ $profileData->email }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">No Telpon :</label>
                            <p class="text-muted">{{ $profileData->no_telp }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Alamat :</label>
                            <p class="text-muted">{{ $profileData->alamat }}</p>
                        </div>
                        <div class="mt-3 d-flex social-links">
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="github"></i>
                            </a>
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="twitter"></i>
                            </a>
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- left wrapper end -->
            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                    <div class="card">
                        <div class="card-body">

                            <h6 class="card-title">Update Admin Profile </h6>

                            <form method="POST" action="{{ route('admin.profile.store')}}" class="forms-sample" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" id="exampleInputUsername1"
                                        autocomplete="off" placeholder="Username" value="{{ $profileData->username }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputUsername1"
                                        autocomplete="off" placeholder="Username" value="{{ $profileData->name }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputUsername1"
                                        autocomplete="off" placeholder="Username" value="{{ $profileData->email }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">No Telpon</label>
                                    <input type="text" name="no_telp" class="form-control" id="exampleInputUsername1"
                                        autocomplete="off" placeholder="Username" value="{{ $profileData->no_telp }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="exampleInputUsername1"
                                        autocomplete="off" placeholder="Username" value="{{ $profileData->alamat }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Foto</label>
                                    <input class="form-control" name="foto" type="file" id="image">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"></label>
                                    <img id="showImage" class="wd-80 rounded-circle"
                                        src="{{ !empty($profileData->foto) ? url('upload/admin_images' . $profileData->foto) : url('upload/no_image.jpg') }}"
                                        alt="profile" />
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Simpan Perubahan</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- middle wrapper end -->
            <!-- right wrapper start -->

            <!-- right wrapper end -->
        </div>
    </div>



    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
