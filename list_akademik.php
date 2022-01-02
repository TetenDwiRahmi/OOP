<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" type= "text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<link rel="stylesheet" type= "text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <title>Akademik</title>
  </head>
  <body>
	<br/>
	<div class="container">
	<h1 class ="text-center"> Data Mahasiswa TA 2021/2022  </h1 ><br>
	<a href="index.php?p=add_akademik" class="btn btn-success">Tambahkan Data</a>
	<?php
		$p=isset($_GET['p']) ? $_GET['p'] : 'add_akademik';
			if($p=='add_akademik') include 'add_akademik.php';
	?>
	<br><br>
		<table class="table" id="example" style="width:100%">
		  <thead class="thead-dark">
			<tr>
				 <th scope="col">No</th> 
				 <th scope="col">NIM</th> 
				 <th scope="col">Nama Mahasiswa</th> 
				 <th scope="col">Tanggal Lahir</th> 
				 <th scope="col">Email</th> 
				 <th scope="col">Jenis Kelamin</th> 
				 <th scope="col">Alamat</th> 
				 <th scope="col">Aksi</th> 
			</tr>
		  </thead>
		  <tbody>
			<?php 
				include 'class_crud_akademik.php'; 
				$crud = new Crud();
				$mhs = $crud->readData('mahasiswa', null, null);
				$no = 1;
				foreach($mhs as $data){
			?> 
			 <tr> 
				 <td><?php echo $no++ ?> </td> 
				 <td><?php echo $data['nim']; ?> </td> 
				 <td><?php echo $data['nama_mhs']; ?></td> 
				 <td><?php echo $data['tgl_lahir']; ?></td> 
				 <td><?php echo $data['email']; ?></td> 
				 <td><?php echo $data['jenis_kelamin']; ?></td> 
				 <td><?php echo $data['alamat']; ?></td> 
				 <td>
					<a href="hapus_akademik.php?nim=<?php echo $data['nim']?>" class="mb-1 mr-1 btn btn-danger"><i class="nav-link-icon fa fa-trash"></i></a>
					<a href="edit_akademik.php?nim=<?php echo $data['nim']?>" class="mb-2 mr-2 btn btn-info"><i class="nav-link-icon fa fa-edit"></i></a>
				
				 </td>
			 </tr> 
			<?php 
				   } 
			?> 
		  </tbody>
		</table>
		
	</div> <br>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable(); ///pada table tambahkan id example
		} );
	</script>
    
  </body>
</html>