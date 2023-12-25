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
                            </div>
                            <div class="mb-3">
                                <label for="nama_ibu " class="form-label">Nama Ibu</label>
                                <input id="nama_ibu" class="form-control" name="nama_ibu" type="text">
                                @error('nama_ibu')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah Bersaudara</label>
                                <div>
                                    <select name="jumlah_saudara" class="form-select" aria-label="Default select example" required>
                                        <option value="">--- Pilih Jumlah Saudara ---</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
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
                    <div>
                        
                    <button type="submit" class="btn btn-primary"> Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
