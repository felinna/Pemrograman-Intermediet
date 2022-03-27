<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
    <title>Cetak Data</title>
    <style>
        h1 {
            text-align : center;
        }

        table,
        td,
        th {
            border : 1px solid #ddd;
            text-align: left;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 15px;
        }
        </style>
        </head>

        <body>
            <h1>Data Produk</h1>
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kode Produk</th>
                        <th>Nama Produk</th>
                        <th>Warna</th>
                        <th>Stok</th>
                        <th>Harga</th>
                    </tr>
                </thead>
    <tbody>
        <?php
        $result = $model->tampil_data();
        if (!empty($result)) {
            foreach ($result as $data) : ?>
            <tr>
            <td><?= $index++ ?></td>
            <td><?= $data->kode_produk ?></td>
            <td><?= $data->nama_produk ?></td>
            <td><?= $data->warna ?></td>
            <td><?= $data->harga ?></td>
            <td><?= $data->stok ?></td>
            </tr>
            <?php endforeach;
        } else { ?>
        <tr>
            <td colspan="9">Belum ada data pada tabel nilai mahasiswa.</td>
        </tr>
    <?php } ?>
        </tbody>
        </table>
        <script>
            window.print();
            </script>
            </body>

            </html>
