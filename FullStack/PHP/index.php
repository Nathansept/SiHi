<!DOCTYPE html>
<html>

	<?php 
	require('dbconn.php');
	?>
	<head>
    <title>Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: 'Ubuntu', serif;
        font-size: 30px;
      }
    </style>
  </head>

	<body>
		<div class="container">
			<?php include('Framework/navbar.php');?>
	
			<?php
			
			if(isset($_GET['page'])){
				$page=$_GET['page'];
			
				switch($page){
					
					case 'Buku' : $display='Buku.php'; break;
					case 'Add_Buku' : $display='Add_Buku.php'; break;
					case 'Edit_Buku' : $display='Edit_Buku.php'; break;
					case 'Delete_Buku' : $display='Delete_Buku.php'; break;
					case 'Daftar_Buku' : $display='Daftar_Buku.php'; break;
					case 'home' : $display='home.php'; break;
					default : $display='home.php';
					
				}
			} else $display="home.php";
			
			include($display);
			
			?>
		</div>
	</body>
</html>