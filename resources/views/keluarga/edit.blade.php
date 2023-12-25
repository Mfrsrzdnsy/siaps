@extends('admin.admin_dashboard')

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Edit Data</h4>
                        <form id="signupForm" method="POST" action="{{ route('keluarga.update', $data->id_keluarga) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input id="nama" value="{{ $data->nama }}" class="form-control" name="nama"
                                    type="text">
                            </div>
                            <div class="mb-3">
                                <label for="nama_ayah" class="form-label">Nama Ayah</label>
                                <input id="nama_ayah" value="{{ $data->nama_ayah }}" class="form-control" name="nama_ayah"
                                    type="text">
                            </div>
                            <div class="mb-3">
                                <label for="nama_ibu" class="form-label">Nama Ibu</label>
                                <input id="nama_ibu" value="{{ $data->nama_ibu }}" class="form-control" name="nama_ibu"
                                    type="text">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah Bersaudara</label>
                                <div>
                                    <select name="jumlah_saudara" class="form-select" aria-label="Default select example"
                                        required>
                                        <option value="">--- Pilih Jumlah Saudara ---</option>
                                        <option value="1" @if ($data->jumlah_saudara === '1') selected @endif>1</option>
                                        <option value="2" @if ($data->jumlah_saudara === '2') selected @endif>2</option>
                                        <option value="3" @if ($data->jumlah_saudara === '3') selected @endif>3</option>
                                        <option value="4" @if ($data->jumlah_saudara === '4') selected @endif>4</option>
                                        <option value="5" @if ($data->jumlah_saudara === '5') selected @endif>5</option>
                                        <option value="6" @if ($data->jumlah_saudara === '6') selected @endif>6</option>
                                        <option value="7" @if ($data->jumlah_saudara === '7') selected @endif>7</option>
                                        <option value="8" @if ($data->jumlah_saudara === '8') selected @endif>8</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="pendidkan_ayah" class="form-label">Pendidikan Terakhir Ayah</label>
                                <input id="pendidikan_ayah" class="form-control" value="{{ $data->pendidikan_ayah }}"
                                    name="pendidikan_ayah" type="text">
                            </div>
                            <div class="mb-3">
                                <label for="pendidikan_ibu" class="form-label">Pendidikan Terakhir Ibu</label>
                                <input id="pendidikan_ibu" class="form-control" value="{{ $data->pendidikan_ibu }}"
                                    name="pendidikan_ibu" type="text">
                            </div>

                            <div class="mb-3">
                                <label for="defaultconfig-4" class="col-form-label">Alamat</label>
                                <textarea id="maxlength-textarea" class="form-control" name="alamat" maxlength="100" rows="8"
                                    placeholder="Masukan Alamat...">{{ $data->alamat }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="defaultconfig-4" class="col-form-label">Deskripsi</label>
                                <textarea id="maxlength-textarea" class="form-control" name="deskripsi" maxlength="100" rows="8"
                                    placeholder="Masukan Deskripsi...">{{ $data->deskripsi }}</textarea>
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
