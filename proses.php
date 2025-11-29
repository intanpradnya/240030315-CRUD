<?php
	include 'koneksi.php';

    if(isset($_POST['aksi'])){
		if($_POST['aksi'] == "add"){
            $nim = $_POST['nim'];
			$namaMahasiswa = $_POST['nama_mahasiswa'];
			$jenisKelamin = $_POST['jenis_kelamin'];
			$foto = $_FILES['foto']['name'];
			$alamat = $_POST['alamat'];
            
            $dir = "img/"; 
			$tmpFile = $_FILES['foto']['tmp_name']; 

			move_uploaded_file($tmpFile, $dir.$foto); 

			//die(); 