<?php
include 'model.php';
$model = new Model();
$index = 1;
?>

<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
	<title>Data Produk</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <!--Navbar-->
      <nav class="navbar navbar-lg text-white bg-info mb-3 fixed-top">
          <div class="container">
              <a class="navbar-brand text-white">Toko Benang</a>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                  <a class="nav-link text-white " aria-current="page" href="index.php">Data Produk</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="data_penjualan.php">Data Penjualan</a>
                </li>
              </ul>
          </div>
      </nav>
      <br><br>
    <!--Akhir Navbar-->

    <div class="container mt-4 mb-4">

    <a href="create.php"><button type="submit" class="btn btn-success mt-3 mb-3">Tambah</button></a>
    <a href="print.php" target="_blank"><button type="submit" class="btn btn-primary mt-3 mb-3 ">Cetak Data</button></a>

        <div class="card shadow-sm my-0">
            <div class="navbar navbar-lg text-white bg-info ">
	            <a class="navbar-brand"><h5>Data Produk</h5></a>
	        </div >
            <table border="1">
                <thead>
                    <tr align="center">
                        <th>No.</th>
                        <th>Kode Produk</th>
                        <th>Nama Produk</th>
                        <th>Warna</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                    <tbody>
                        <?php 
                        $result =$model->tampil_data();
                        if (!empty($result)){
                            foreach ($result as $data) : ?>
                            <tr>
                                <td><?= $index++ ?></td>
                                <td><?= $data->kode_produk ?></td>
                                <td><?= $data->nama_produk ?></td>
                                <td><?= $data->warna ?></td>
                                <td><?= $data->harga ?></td>
                                <td><?= $data->stok ?></td>

                                <td collspan="1" align="center">
                                    <a name="edit" id="edit" href="edit.php?kode_produk=<?= $data->kode_produk ?>">
                                        <button type="submit" name="submit_simpan" class="btn btn-primary mt=6s">Edit</button>
                                    </a>
                                    <a name="delete" id="delete" href="proces.php?kode_produk=<?= $data->kode_produk ?>">
                                        <button type="submit" class="btn btn-primary">Delete</button>
                                    </a>
                                </td>  
                            </tr>
                            <?php endforeach;
                        } else { ?>
                        <tr>
                            <tr>
                                <td colspan="9">Belum ada data pada tabel Data Produk</td>
                        </tr>
                        <?php } ?>
                    </tbody>
            </table>


        </div>
    </div>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>
</body>
</html>




