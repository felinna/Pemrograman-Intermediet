<?php
$id = $_GET["kode_produk"];
include 'model.php';
$model = new Model ();
$data = $model->edit_penjualan($id);
?>

<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
	<title>penjualan</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
<div class="container mt-4 mb-4">
    <div class="card shadow-sm my-0">
        <div class="navbar navbar-lg text-white bg-info mb-3">
	        <a class="navbar-brand"><h5>Input Transaksi</h5></a>
	    </div >
        <div class="col-md-6">
            <form action="proces.php?add" method="POST">
                <div class="class container">
                <div class="mb-3">
                        <label for="kode_produk" class="form-label">Kode Produk</label>
                        <input type="text" name="kode_produk" class="form-control" aria-describedby="kode_produk"value="<?php echo $data->kode_produk ?>"/>
                    </div> 
                    <div class="mb-3">
                        <label for="nama_produk" class="form-label">Nama Produk</label>
                        <input type="text" name="nama_produk" class="form-control"  aria-describedby="nama_produk" value="<?php echo $data->nama_produk ?>"/>
                    </div>   
                    
                    <div class="mb-3">
                        <label for="warna" class="form-label">Warna</label>
                        <input type="text" name="warna" class="form-control"  aria-describedby="warna" value="<?php echo $data->warna ?>"/>
                    </div> 

                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" name="harga" class="form-control"  aria-describedby="harga" value="<?php echo $data->harga ?>"/>
                    </div> 

                    <div class="mb-3">
                        <label for="jumlah" class="form-label">jumlah</label>
                        <input type="text" name="jumlah" class="form-control"  aria-describedby="jumlah" value="<?php echo $data->jumlah?>"/>
                    </div> 

                    <button type="submit" name="edit_penjualan" class="btn btn-primary mt-3 mb-3">Update</button>
                    <a href="data_penjualan.php"><button name="banck" class="btn btn-primary mt-3 mb-3">Back</button></a>
                    <br><br>
                   
                </div>
                
            </form>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>


