<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
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