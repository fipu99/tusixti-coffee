<?php
include 'header.php';

include '../db.php';

function tambahsaldo($data)
{
    global $conn;
    $tanggal = htmlspecialchars($data["tanggal"]);
    $namabarang = htmlspecialchars($data["namabarang"]);
    $total = htmlspecialchars($data["total"]);
    $keterangan = htmlspecialchars($data["keterangan"]);
    $jumlah = htmlspecialchars($data["jumlah"]);


    // query tambah data
    $query = "INSERT INTO barang
                VALUES
                ('','$tanggal', '$namabarang', '$total', '$keterangan', '$jumlah')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

if (isset($_POST["submit"])) {
    if (tambahsaldo($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil ditambahkan !!');
        document.location.href = 'index.php';
        </script>
    ";
    } else {
        echo "<script>
        alert('data gagal ditambahkan !!');
        document.location.href = 'index.php';
        </script>";
    }
}



?>
<h3 class="p-3 text-center">Tambah Data</h3>

<div class="card-body">
    <form action="" method="POST">
        <div class="mb-4">
        <label>tanggal</label>
                                    <input autocomplete="off" type="date" value="<?php if (isset($_GET['tanggal'])) {
                                                                                        echo $_GET['tanggal'];
                                                                                    } else {
                                                                                        echo "";
                                                                                    } ?>" name="tanggal" class="form-control datepicker2" placeholder="tanggal" required="required">
            <label for="nama barang" class="form-label">Nama barang</label>
            <input type="text" name="namabarang" required class="form-control" id="nama barang" autocomplete="off" required placeholder="masukan nama barang..">
        </div>
        <div class="mb-4">
            <label for="total" class="form-label">total</label>
            <select name="total" class="form-control" required id="total" required>
                <option value="">- Pilih -</option>
                <option value="1 box">1 box</option>
                <option value="2 box">2 box</option>
                <option value="3 box">3 box</option>
                <option value="4 box">4 box</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="keterangan" class="form-label">keterangan</label>
            <select name="keterangan" class="form-control" required id="keterangan" required>
                <option value="">- Pilih -</option>
                <option value="masuk">masuk</option>
                <option value="keluar">keluar</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="jumlah" class="form-label">jumlah</label>
            <input type="number" name="jumlah" required class="form-control" id="jumlah" autocomplete="off"></input>
        </div>
        <div class="mb-4 text-end">
            <a href="index.php" class="btn btn-danger">Batal</a>
            <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
        </div>
    </form>
</div>


<?php include 'footer.php'  ?>