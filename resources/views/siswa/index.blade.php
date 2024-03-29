@extends('admin.admin_dashboard')

@section('content')
    <div class="page-content">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Data Anak</h6>
                        <div class="d-flex justify-content-end mb-3">
                            <a href="{{ route('siswa.create') }}" class="btn btn-primary ml-auto me-2">Tambah Data</a>

                            <a href="{{ url('/downloadpdf') }}" target="_blank" class="btn btn-info btn-md"><i class="fa-solid fa-download"></i> PDF</a>
                        </div>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswas as $siswa)
                                        <tr>
                                            <td>{{ $siswa->nis }}</td>
                                            <td>{{ $siswa->nama }}</td>
                                            <td>{{ $siswa->jenis_kelamin }}</td>
                                            <td>{{ $siswa->tempat_lahir }}</td>
                                            <td>{{ $siswa->tanggal_lahir }}</td>
                                            <td style="display: flex">
                                                <button type="button" class="btn btn-primary" style="margin-right: 5px;"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#memberModal_{{ $siswa->id_siswa }}"><i class="far fa-eye"></i></button>
                                                <div class="modal fade" id="memberModal_{{ $siswa->id_siswa }}"
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
                                                                                <td>: {{ $siswa->nama }}</td>
                                                                                <td rowspan="7"><img src="{{ asset('storage/' . $siswa->foto) }}" width="100%" alt=""></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>NIS</td>
                                                                                <td>: {{ $siswa->nis }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Jenis Kelamin</td>
                                                                                <td>: {{ $siswa->jenis_kelamin }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Tempat Lahir</td>
                                                                                <td>: {{ $siswa->tempat_lahir }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Tanggal Lahir</td>
                                                                                <td>: {{ $siswa->tanggal_lahir }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Alamat</td>
                                                                                <td>: {{ $siswa->alamat }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Pendidikan</td>
                                                                                <td>: {{ $siswa->pendidikan_terakhir }}
                                                                                </td>
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

                                                <a href="{{ route('siswa.edit', $siswa->id_siswa) }}" class="btn btn-warning"
                                                    style="margin-right: 5px;"><i class="far fa-edit"></i></a>
                                                    @if(auth()->check() && auth()->user()->isAdmin())
                                                    <form id="deleteForm{{ $siswa->id_siswa }}" method="POST" action="{{ route('siswa.destroy', $siswa->id_siswa) }}">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="button" class="btn btn-danger" style="margin-right: 5px;" onclick="confirmDelete('{{ $siswa->id_siswa }}')">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                    @endif
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 1500
            });
        @endif
    </script>

<script>
    function confirmDelete(siswaId) {
        Swal.fire({
            title: 'Apakah Anda yakin ingin menghapus data anak ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // If user clicks "Ya, Hapus!", submit the form
                document.getElementById('deleteForm' + siswaId).submit();
            }
        });
    }
</script>
@endsection
