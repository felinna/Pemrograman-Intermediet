<?php 
include 'model.php';
if (isset($_POST['submit_simpan'])) {
    $kode_produk = $_POST['kode_produk'];
    $nama_produk = $_POST['nama_produk'];
    $warna = $_POST['warna'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $model = new Model();
    $model->insert($kode_produk, $nama_produk, $warna, $harga, $stok);
    header('location:index.php');
}

if (isset($_POST['submit_edit'])) {
    $kode_produk = $_POST['kode_produk'];
    $nama_produk = $_POST['nama_produk'];
    $warna = $_POST['warna'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $model = new Model();
    $model->update($kode_produk, $nama_produk, $warna, $harga, $stok);
    header('location:index.php');
}

if (isset($_Post['submit_penjualan'])){
    $kode_produk = $_POST['kode_produk'];
    $nama_produk = $_POST['nama_produk'];
    $warna = $_POST['warna'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $total_pembayaran = $_POST['total_pembayaran']
    $model = new Model();
    $model->update_penjualan($kode_produk, $nama_produk, $warna, $harga, $jumlah);
    header('location:data_penjualan.php');
}

if (isset($_Post['transaksi_penjualan'])){
    $kode_produk = $_POST['kode_produk'];
    $nama_produk = $_POST['nama_produk'];
    $warna = $_POST['warna'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $total_pembayaran = $_POST['total_pembayaran']
    $model = new Model();
    $model->total($kode_produk, $nama_produk, $warna, $harga, $jumlah, $total_pembayaran);
    header('location:index.php');
}

if (isset($_GET['kode_produk'])) {
    $id = $_GET['kode_produk'];
    $model = new Model();
    $model->delete($id);
    header('location:index.php');
}
