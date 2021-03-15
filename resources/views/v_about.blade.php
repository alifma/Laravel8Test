<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman About</title>
</head>
<body>
  <h1>Halaman About</h1>
  <div style="text-align: center;">
  <p>Display Variable Dengan Tag PHP</p>
  <h2>Nama : <?= $nama ?></h2>
  <h2>Alamat : <?= $alamat ?></h2>
  <?= $data_tag ?>
  </div>
  <hr>
  <div style="text-align: center;">
  <p>Display Variable Dengan Tag Laravel</p>
  <h2>Nama : {{$nama}}</h2>
  <h2>Alamat : {{$alamat}}</h2>
  {!!$data_tag!!}
  </div>
</body>
</html>