<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap --> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

	<!-- Font Awesome --> 
	<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
  		<div class="container-fluid">
    		<a class="navbar-brand" href="#">
     	CRUD - BS5
  			</a>
  		</div>
	</nav>
    <!-- Judul --> 
<div class="container-fluid">
	<h1 class="mt-4">Data Siswa</h1>
	<figure>
  		<blockquote class="blockquote">
    		<p>Berisi data yang telah disimpan di database.</p>
  		</blockquote>
 	 <figcaption class="blockquote-footer">
   		CRUD <cite title="Source Title">Create Read Update Delete</cite>
  		</figcaption>
	</figure>
    <a href="kelola.php" type="button" class="btn btn-primary mb-3">
		<i class="fa fa-plus"></i>

	Tambah Data
</a>
<div class="table-responsive">
		  <table class="table align-middle table-bordered table-hover">
		    <thead>
		      <tr>
		        <th>No.</th>
		        <th>NIM</th>
		        <th>Nama Mahasiswa</th>
		        <th>Jenis Kelamin</th>
		        <th>Foto Mahasiswa</th>
		        <th>Alamat</th>
		        <th>Aksi</th>
		       </tr>
		    </thead>

		    <tbody>
			<?php
				while($result = mysqli_fetch_assoc($sql)){
			?>
		      <tr>
		        <th scope="row">
					<?php echo ++$no; ?>
				</th>
		        <td>
					<?php echo $result['nim']; ?>
				</td>
		        <td>
					<?php echo $result['nama_mahasiswa']; ?>
				</td>
		        <td>
					<?php echo $result['jenis_kelamin']; ?>
				</td>
		        <td>
		        	<img src="img/<?php echo $result['foto_mahasiswa']; ?>" style="width: 150px;">
		        </td>
		        <td>
					<?php echo $result['alamat']; ?>
				</td>
		        <td>
		        	<a href="kelola.php?ubah=<?php echo $result['id_mahasiswa']; ?>" type= "button" class="btn btn-success btn-sm">
		        		<i class="fa fa-pencil"></i>
		        	</a>
		        	<a href="proses.php?hapus=<?php echo $result['id_mahasiswa']; ?>" type= "button" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin ingin menghapus data tersebut???')">
		        		<i class="fa fa-trash"></i>
		        	</a>
		        </td>
		      </tr>    
			  <?php
				}
				?>
		  </tbody>
		</table>
	</div>
</div>
</body>
</html>