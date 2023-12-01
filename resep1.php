<?php
include '../db.php';

$resep_id = $_GET["resep_id"];
$resep = mysqli_query($conn, "SELECT * FROM resep WHERE resep_id = $resep_id");

include 'header.php';  ?>

<center>
    <br></br />
    <h4 class="promo">resep tusixti coffee</h4>
</center>
<br><br>
<hr><br>

<style>
    card-body {
        border: 10px solid #ff3d0036;
        border-radius: 20px;
        box-shadow: 4x 7px 7px 0px #00000042;
        margin: 10px;
    }
</style>


<div class="container-responsive">
    <div class="row justify-content-center">
        <?php foreach ($resep as $keg) : ?>
            <div class="col-md-7 col-12">
                <article style="height: 400px; width: 400px;">
                    <img src="../img/<?php echo $keg['foto']; ?>" class="card-img-top mb-3" alt="...">
                </article>
                <br>
            </div>
            <div class="col-md-5 mt-0">
                <div>
                    <h1 class="mb-3"><?php echo $keg['nama']; ?></h1>
                </div>
                <p class="fs-5"><?php echo $keg['bahan']; ?></p>
                <hr>
                <p class="fs-5"><?php echo $keg['proses']; ?></p>
            </div>
        <?php endforeach;  ?>
    </div>
</div>


<?php include 'footer.php';  ?>