<?php 
	include("class_crud_akademik.php"); 
	$crud=new Crud(); 
	if (isset($_GET['nim'])) { 
		$id_value=$_GET['nim'];
		$resul = $crud->deleteData('mahasiswa','nim',$id_value);
	}else{
		echo "<script>alert('Gagal Menghapus Data');</script>";
	}
?> 
