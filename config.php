<?php 
 
$conn = mysqli_connect("localhost", "root", "", "pemuda04");
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>
