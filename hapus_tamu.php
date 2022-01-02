<?php 
	include("class_crud.php"); 
	$crud=new Crud(); 
	if (isset($_GET['id'])) { 
		$id_value=$_GET['id'];
		$resul = $crud->deleteData('tamu','id',$id_value);
		if($resul == 'sukses'){
			echo "<script>alert('Berhasil Menghapus Data');window.location='index.php?p=list_tamu';</script>";
			$p=isset($_GET['p']) ? $_GET['p'] : 'list_tamu';
						if($p=='list_tamu') include 'list_tamu.php';
		 } else { 
			
		 } 
		
	}
?> 