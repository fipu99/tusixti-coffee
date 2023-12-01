<?php  
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "tusixti");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [ ];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
        }
    return $rows;
}



function tambah ($data) {
    global $conn;
    $namabarang = htmlspecialchars($data["nama barang"]);
    $total = htmlspecialchars($data["total"]);
    $keterangan = htmlspecialchars($data["keterangan"]);
    $jumlah = htmlspecialchars($data["jumlah"]);

    // query insert data
    $query = "INSERT INTO barang
                VALUES
                ('', '$namabarang', '$total', '$keterangan', '$jumlah',)
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus ($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM barang WHERE id = $id");
    return mysqli_affected_rows($conn);
}


function ubah ($data) {
    global $conn;

    $id = $data["id"];
    $namabarang = htmlspecialchars($data["nama barang"]);
    $total= htmlspecialchars($data["total"]);
    $keterangan = htmlspecialchars($data["keterangan"]);
    $jumlah = htmlspecialchars($data["jumlah"]);

    $query ="UPDATE benda SET 
            namabarang = '$namabarang',
            total = '$total',
            keterangan = '$keterangan',
            jumlah = '$jumlah',
            WHERE id = $id
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}


function cari($keywoard) {
    $query = "SELECT * FROM barang
                WHERE 
            nama barang LIKE '%$keywoard%' OR
            total LIKE '%$keywoard%' OR
            keterangan LIKE '%$keywoard%' OR
            jumlah LIKE '%$keywoard%'
            ";
    return query($query);
}


function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah terdaftar!')
                </script>";
            return false;
    }

    // cek konfirmasi password
    if ( $password !== $password2 ) {
        echo "<script>
                alert('konfirmasi password tidak sesuai')
                </script>";
            return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database tabel user
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);


}
