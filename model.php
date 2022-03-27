<?php
include 'connection.php';
class Model extends Connection{

    public function __construct()
    {
        $this->conn = $this->get_connection();
    }

    public function insert($kode_produk, $nama_produk, $warna, $harga, $stok)
    {
        $produk = $this->produk($kode_produk, $nama_produk, $warna, $harga);
        $sql = "INSERT INTO data_produk (kode_produk, nama_produk, warna, harga, stok) VALUESS ('$kode_produk', '$nama_produk', '$warna', '$harga', '$stok')";
        $this->conn->query($sql);
    }

    public function insert_penjualan($kode_produk, $nama_produk, $warna, $harga, $jumlah)
    {
        $produk = $this->produk($kode_produk, $nama_produk, $warna, $harga, $jumlah);
        $sql = "INSERT INTO data_penjualan (kode_produk, nama_produk, warna, harga, jumlah) VALUESS ('$kode_produk', '$nama_produk', '$warna', '$harga', '$jumlah')";
        $this->conn->query($sql);
    }

    public function total($harga, $jumlah){
        $total= $harga * $jumlah;

        if($jumlah > 12){
            $potongan = (10 * $harga)/100;
            $total_pembayaran = $total - $potongan;  
        }else{

            $potongan = (0 * $harga)/100;
            $total_pembayaran = $total - $potongan;

            return $total_pembayaran;
        }
    }


    public function tampil_data()
    {
        $sql ="SELECT * FROM data_produk";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }

    public function tampil_datapenjualan()
    {
        $sql ="SELECT * FROM data_penjualan";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }

    public function edit($id)
    {
        $sql = "SELECT * FROM data_produk WHERE kode_produk='$id'";
        $bind = $this->conn->query($sql);
        while($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }

    public function edit_penjualan($id)
    {
        $sql = "SELECT * FROM data_penjualan WHERE kode_produk='$id'";
        $bind = $this->conn->query($sql);
        while($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }


    public function update($kode_produk, $nama_produk, $warna, $harga, $stok)
    {
        $produk = $this->produk($kode_produk, $nama_produk, $warna, $harga, $stok);
        $sql = "UPDATE data_produk SET nama_produk='$nama_produk', warna='$warna', harga='$harga', stok='$stok' WHERE kode_produk='$kode_produk'";
        $this->conn->query($sql);
    }

    public function update_penjualan($kode_produk, $nama_produk, $warna, $harga, $jumlah)
    {
        $produk = $this->produk($kode_produk, $nama_produk, $warna, $harga, $stok);
        $sql = "UPDATE data_penjualan SET nama_produk='$nama_produk', warna='$warna', harga='$harga', jumlah='$jumlah' WHERE kode_produk='$kode_produk'";
        $this->conn->query($sql);
    }

    public function delete($kode_produk)
    {
        $sql = "DELETE FROM data_produk WHERE kode_produk='$kode_produk'";
        $this->conn->query($sql);
        }

    public function delete_penjualan($kode_produk)
    {
        $sql = "DELETE FROM data_penjualan WHERE kode_produk='$kode_produk'";
        $this->conn->query($sql);
        }
}