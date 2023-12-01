<?php

include 'header.php';
include '../db.php';

$baju = query("SELECT * FROM barang");


?>

</br>
<br>
<h4>Daftar stok barang :</h4>
<br>
<a href="index.php" target="_blank">PRINT</a>
<div class="table-responsive">
    <table class="table table-bordered table-dark">
        <thead class="text-light" class="card-header table" style="color:dark">
            <tr>
                <th width="1%" rowspan="2">no</th>
                <th rowspan="2" class="text-center">tanggal</th>
                <th rowspan="2" class="text-center">nama barang</th>
                <th rowspan="2" width="10%" class="text-center">total</th>
                <th colspan="2" width="10%" class="text-center">keterangan</th>
                <th rowspan="2" class="text-center">jumlah</th>
                <th rowspan="2" width="8%" class="text-center">hapus</th>
            </tr>
            <tr>
                <th class="text-center">masuk</th>
                <th class="text-center">keluar</th>
            </tr>
        </thead>
        <tbody class="card-text">
            <?php
            $no = 1;

            foreach ($baju as $b) : ?>
                <tr>
                    <td class="text-center"><?php echo $no++; ?></td>
                    <td class="text-center"><?php echo $b['tanggal']; ?></td>
                    <td class="text-center"><?php echo $b['nama barang']; ?></td>
                    <td class="text-center"><?php echo $b['total']; ?></td>
                    <td class="text-center"><?php
                                            if ($b['keterangan'] == "masuk") {
                                                echo '<i class="fa-solid fa-check"></i>';
                                            } else {
                                                echo "-";
                                            } ?>
                    </td>
                    <td class="text-center"><?php
                                            if ($b['keterangan'] == "keluar") {
                                                echo '<i class="fa-solid fa-check"></i>';
                                            } else {
                                                echo "-";
                                            } ?>
                    </td>
                    <td><?php echo "" . number_format($b['jumlah']) . " pcs" ?></td>
                    <td class="text-center">
                        <a href="hapus.php?id=<?php echo $b["id"]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin ingin menghapus data??');"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
            <?php endforeach;  ?>
            <script>
        window.print();
    </script>    
        </tbody>
    </table>
</div>
<?php include 'footer.php'; ?>