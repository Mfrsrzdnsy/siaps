@extends('admin.admin_dashboard')

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Tambah Data</h4>
                        <form id="signupForm" method="POST" action="{{ route('keluarga.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input id="nama" class="form-control" name="nama" type="text">
                            </div>
                            <div class="mb-3">
                                <label for="nama_ayah " class="form-label">Nama Ayah</label>
                                <input id="nama_ayah" class="form-control" name="nama_ayah" type="text">
                                @error('nama_ayah')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <label for="nama_ibu " class="form-label">Nama Ibu</label>
                                <input id="nama_ibu" class="form-control" name="nama_ibu" type="text">
                                @error('nama_ibu')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah Bersaudara</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="jumlah_saudara" id="saudara1" value="satu">
                                        <label class="form-check-label" for="saudara1">
                                            1
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="jumlah_saudara" id="saudara2" value="dua">
                                        <label class="form-check-label" for="saudara2">
                                            2
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="jumlah_saudara" id="saudara3" value="tiga">
                                        <label class="form-check-label" for="saudara3">
                                            3
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="jumlah_saudara" id="saudara4" value="empat">
                                        <label class="form-check-label" for="saudara4">
                                            Lainnya
                                        </label>
                                    </div>
                                </div>
                            </div>                            
                            <div class="mb-3">
                                <label for="pendidikan_ayah" class="form-label">Pendidikan Terakhir Ayah</label>
                                <input id="pendidikan_ayah" class="form-control" name="pendidikan_ayah" type="text">
                            </div>
                            <div class="mb-3">
                                <label for="pendidikan_ibu" class="form-label">Pendidikan Terakhir Ibu</label>
                                <input id="pendidikan_ibu" class="form-control" name="pendidikan_ibu" type="text">
                            </div>
                            <div class="mb-3">
                                <label for="defaultconfig-4" class="col-form-label">Alamat</label>
                                <textarea id="maxlength-textarea" class="form-control" name="alamat" maxlength="100" rows="8"
                                    placeholder="Masukan Alamat..."></textarea>
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
