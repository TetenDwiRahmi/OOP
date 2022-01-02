<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form MABA</title>
  </head>
  <body>
  
	<!-- FORM -->
	<div class="container">
	<h2 class="alert alert-primary text-center mt-2">Form Mahasiswa Baru <br> TA 2021/2022</h2>
	<form method="POST" >
	  <div class="form-group">
		<label>NIM</label>
		<input type="text" class="form-control" name= "nim" placeholder="Masukan NIM" required>
	  </div>
	  <div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name= "nama_mhs" placeholder="Masukan Nama Lengkap" required>
	  </div>
	  <div class="form-group">
		<label > Tanggal Lahir </label >
			<input type ="date" name= "tgl_lahir" class ="form-control">
	  </div>
	  
	  <div class="form-group">
		<label>Email</label>
		  <input type="email" class="form-control" name= "email" required placeholder="Email">
	  </div>
	  	  
	<fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio"  name="jenis_kelamin"  value="Laki-Laki" checked>
          <label class="form-check-label" >
            Laki-Laki
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
          <label class="form-check-label">
            Perempuan
          </label>
        </div>
      </div>
    </div>
  </fieldset>

 
	  <div class="form-group">
		<label>Alamat</label>
		<textarea class="form-control" rows="3" name="alamat" placeholder="Masukkan Alamat Lengkap"></textarea>
	  </div>
	  
	    
	  <div class="form-group">
		<div class="form-group">
		<button type="submit"  name ="sub" class="btn btn-success btn-lg">Kirim</button>
		<button type="reset"  class="btn btn-danger btn-lg">Reset</button>
	  </div>
	  </div>
	  
	</form>
	</div>
	<!-- END FORM -->
	
	<?php 
	include ("class_crud_akademik.php"); 
	if (isset($_POST['sub'])) { 
		$crud = new Crud();
		$arrData = array('nim' => $_POST['nim'],
		'nama_mhs' => $_POST['nama_mhs'],
		'tgl_lahir' => $_POST['tgl_lahir'],
		'email' => $_POST['email'],
		'jenis_kelamin' => $_POST['jenis_kelamin'],
		'alamat' => $_POST['alamat']);
		$hasil=$crud->createData('mahasiswa', $arrData);
		if ($hasil == "sukses"){ 
				echo "<script>alert('Mahasiswa berhasil tersimpan');window.location='index.php?p=list_akademik';</script>";
				$p=isset($_GET['p']) ? $_GET['p'] : 'list_akademik';
						if($p=='list_akademik') include 'list_akademik.php';
			} 
		else { 
				echo "<script>alert('Data gagal disimpan');window.location='index.php?p=add_akademik.php';</script>";
				$p=isset($_GET['p']) ? $_GET['p'] : 'add_akademik';
						if($p=='add_akademik') include 'add_akademik.php';
		} 
	} 
	?>
  </body>
</html>