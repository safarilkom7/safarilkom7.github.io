<!DOCTYPE html>
<html>
<head>
	<title>Create data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<h3>Create data</h3>
	<form method="post">
	  <div class="form-group">
	    <label>Nama</label>
	    <input type="text" name="nama" class="form-control"  placeholder="Nama">
	  </div>
	   <div class="form-group">
	    <label>Mata Kuliah</label>
	    <input type="text" name="matkul" class="form-control" placeholder="Mata Kuliah">
	  </div>
	   <div class="form-group">
	    <label>No HP</label>
	    <input type="text" name="no_hp" class="form-control" placeholder="Nomor Hp">
	  </div>
	  <button type="submit" name="create" class="btn btn-primary">CREATE</button>
	</form>
    

</div>

<?php

if (isset($_POST['create'])) {
	$nama=$_POST['nama'];
	$matkul=$_POST['matkul'];
	$no_hp=$_POST['no_hp'];

	// File json yang akan dibaca
	$file = "json.json";

	// Mendapatkan file json
	$dosen = file_get_contents($file);

	// Mendecode dosen.json
	$data = json_decode($dosen, true);

	foreach ($data as $key) {

	  $max = $key['id']; 
			
		
	}

	$max;

	// Data array baru
			$data [] = array(
			    'id'     => $max+1,
			    'nama'   => $nama,
			    'matkul' => $matkul,
			    'no_hp' => $no_hp
			);




	// Mengencode data menjadi json
	$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

	// Menyimpan data ke dalam dosen.json
	$dosen = file_put_contents($file, $jsonfile);

	if ($dosen) {
		header("location: ../../");
	}
		
	}



	?>










<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

