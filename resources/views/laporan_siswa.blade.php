<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>download PDF</title>
	<style>
		table, th, td {
		  border:1px solid black;
		  border-collapse: collapse;
		}
		</style>

</head>
<body>
	
	<div class="page-content">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">Data Anak Putus Sekolah</h2>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table" style="width:100%">
								<thead>
									<tr>
										<th>NIS</th>
										<th>Nama</th>
										<th>Jenis Kelamin</th>
										<th>Tempat Lahir</th>
										<th>Tanggal Lahir</th>
										<th>Alamat</th>
										<th>Pendidikan</th>
										<th>Deskripsi</th>
									</tr>
								</thead>
									<tbody>
										@foreach ($siswas as $siswa)
                                    <tr style="height:200px">
                                       
										<td>{{ $siswa->nis }}</td>
                                        
										<td>{{ $siswa->nama }}</td>
                                        
										<td>{{ $siswa->jenis_kelamin }}</td>
                                        
										<td>{{ $siswa->tempat_lahir }}</td>
                                        
										<td>{{ $siswa->tanggal_lahir }}</td>
                                        
										<td>{{ $siswa->alamat }}</td>
										
										<td>{{ $siswa->pendidikan_terakhir }}
										
										<td>{{ $siswa->deskripsi }}</td>
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
</body>
</html>