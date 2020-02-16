<!DOCTYPE html>
<html>
<head>
  <title>Aplikasi sederhana menggunakan file json</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


<div class="container">
  <h3>Data dosen (Developer by safar)</h3>
  <div class="title-header">
    <div class="form-group"> 
      <a href="application/dosen/create.php" class="btn btn-primary">Tambah</a>
    </div>
  </div>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Mata Kuliah</th>
      <th scope="col">Nomor HP</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $file = "application/dosen/json.json";
      $get = file_get_contents($file);
      $dosen = json_decode($get, true);
    ?>

    <?php $i=1; foreach ($dosen as $data) :  ?>
    <tr>
      <th><?= $i ?>.</th>
      <td><?= $data['nama'] ?></td>
      <td><?= $data['matkul'] ?></td>
      <td><?= $data['no_hp'] ?></td>
      <td>
        <a href="application/dosen/update.php?id=<?= $data['id'] ?>">Ubah</a> |
        <a href="application/dosen/read.php?id=<?= $data['id'] ?>">Detail</a> |
        <a href="application/dosen/delete.php?id=<?= $data['id'] ?>">Hapus</a>
      </td>
    </tr>
  <?php $i++; endforeach; ?>
  </tbody>
</table>
</div>















<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>