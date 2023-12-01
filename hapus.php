<?php

include '../db.php';

function hapussaldo($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM barang WHERE id = $id");
    return mysqli_affected_rows($conn);
}

$id = $_GET["id"];

if (hapussaldo($id) > 0) {
    echo "
        <script>
        alert('data berhasil di hapus !!');
        document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "<script>
        alert('data gagal di hapus !!');
        document.location.href = 'index.php';
        </script>";
}
