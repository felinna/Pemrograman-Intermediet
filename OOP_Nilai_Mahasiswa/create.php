<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data Nilai</title>
</head>

<body>
    <h1>Tambah</h1>   
    <a href="index.php">kembali</a>
    <br><br>
    <form action="proces.php" method="post">
        <label>Nim</label>
        <br>
        <input type="text" name="nim">
        <br><br>

        <label>Nama</label>
        <br>
        <input type="text" name="nama">
        <br><br>

        <label>UTS</label>
        <br>
        <input type="number" name="uts">
        <br><br>

        <label>UAS</label>
        <br>
        <input type="number" name="uas">
        <br><br>
        
        <label>Tugas</label>
        <br>
        <input type="number" name="tugas">
        <br><br>
        <button type="submit" name="submit_simpan">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>