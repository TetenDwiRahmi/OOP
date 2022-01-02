<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form Tamu</title>
  </head>
  <body>
  
	<!-- FORM -->
	<div class="container">
	<h2 class="alert alert-primary text-center mt-2">Buku Tamu </h2>
	<form method="POST" >
	  <div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name= "nama" placeholder="Masukan Nama Lengkap" required>
	  </div>
	  <div class="form-group">
		<label>Email</label>
		  <input type="email" class="form-control" name= "email" required placeholder="Email">
	  </div>
	  <div class="form-group">
		<label>Komentar</label>
		<textarea class="form-control" rows="3" name="komentar" placeholder="Silahkan Masukan Komentar Anda.."></textarea>
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
	include ("class_crud.php"); 
	if (isset($_POST['sub'])) { 
		$crud = new Crud();
		$arrData = array('nama' => $_POST['nama'],
		'email' => $_POST['email'],
		'komentar' => $_POST['komentar']);
		$hasil=$crud->createData('tamu', $arrData);
		if($hasil=="sukses"){
			echo "<script>alert('Terimakasih telah mengisi buku tamu');window.location='index.php?p=list_tamu';</script>";
				$p=isset($_GET['p']) ? $_GET['p'] : 'list_tamu';
						if($p=='list_tamu') include 'list_tamu.php';
		}else { 
			echo "<script>alert('Proses input buku tamu,Gagal..');window.location='index.php?p=add_tamu.php';</script>";
			$p=isset($_GET['p']) ? $_GET['p'] : 'add_tamu';
					if($p=='add_tamu') include 'add_tamu.php';
		} 
			
	} 
	?>
  </body>
</html>