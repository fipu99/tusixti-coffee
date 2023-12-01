<?php
include '../db.php';

$resep = mysqli_query($conn, "SELECT * FROM resep");

include 'header.php';  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
  
  </head>

<center>
  <br></br />
  <h4 class="promo">resep tusixti coffee</h4>
</center>
<br><br>
<hr><br>

<style>
  card-body {
    display : grid;
    grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
    gap : 1rem;
    border: 10px solid #ff3d0036;
    border-radius: 20px;
    box-shadow: 4x 7px 7px 0px #00000042;
    margin: 10px;
  }
</style>

<br><br>
<div class="container" style="background: firebrick;">
  <div class="row">
    <?php foreach ($resep as $keg) { ?>
      <div class="col-md-4 mb-3">
        <div class="card" style="width: 18rem; height: margin: 10px;">

          <img src="../img/<?php echo $keg['foto']; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $keg['nama']; ?></h5>
            <a href="resep1.php?resep_id=<?php echo $keg["resep_id"]; ?>" class="btn btn-sm btn-primary">Detail</a>
          </div>
        </div>
      </div>
    <?php }  ?>
  </div>
</div>
</html>
<!--
<div class="container" style="background:#444444">
  <div class="card" style="width: 18rem; height: 20rem; margin: 10px;">
    <div class="card-body">
      <h5 class="card-title">americano</h5>
      <p class="card-text">bahan : esspresso single shot, air 180mg, es batu (ice). </p>
      <a href="about.php" class="btn btn-primary">menu</a>
    </div>
  </div>
  <div class="card" style="width: 18rem; height: 20rem;">
    <div class="card-body">
      <h5 class="card-title">espresso</h5>
      <p class="card-text">bahan : esspresso single shot/double shot. </p>
      <a href="about.php" class="btn btn-primary">menu</a>
    </div>
  </div>
  <div class="card" style="width: 18rem; height: 20rem;">
    <div class="card-body">
      <h5 class="card-title">es kopi 260</h5>
      <p class="card-text">bahan :  esspresso single shot, gula aren 20mg, es bstu, fresh milk 140mg.</p>
      <a href="about.php" class="btn btn-primary">menu</a>
    </div>
  </div>
  <div class="card" style="width: 18rem; height: 20rem;">
    <div class="card-body">
      <h5 class="card-title">latte</h5>
      <p class="card-text">bahan : esspresso single shot, fresh milk 14mg, es batu (ice). </p>
      <a href="about.php" class="btn btn-primary">menu</a>
    </div>
  </div>
  <div class="card" style="width: 18rem; height: 20rem;">
    <div class="card-body">
      <h5 class="card-title">cappucino</h5>
      <p class="card-text">bahan : esspresso single shot, fresh milk 140mg, es batu (ice). </p>
      <a href="about.php" class="btn btn-primary">menu</a>
    </div>
  </div>
  <div class="card" style="width: 18rem; height: 20rem;">
    <div class="card-body">
      <h5 class="card-title">vanilla latte</h5>
      <p class="card-text">bahan : esspresso single shot, sirup 25mg, fresh milk 140mg, es bstu (ice). </p>
      <a href="about.php" class="btn btn-primary">menu</a>
    </div>
  </div>
  <div class="card" style="width: 18rem; height: 20rem;">
    <div class="card-body">
      <h5 class="card-title">hazelnut latte</h5>
      <p class="card-text">bahan : esspresso single shot, sirup 25mg, fresh milk 140mg, es bstu (ice). </p>
      <a href="about.php" class="btn btn-primary">menu</a>
    </div>
  </div>
  <div class="card" style="width: 18rem; height: 20rem;">
    <div class="card-body">
      <h5 class="card-title">caramel latte</h5>
      <p class="card-text">bahan : esspresso single shot, sirup 25mg, fresh milk 140mg es bstu (ice). </p>
      <a href="about.php" class="btn btn-primary">menu</a>
    </div>
  </div>
  <div class="card" style="width: 18rem; height: 20rem;">
    <div class="card-body">
      <h5 class="card-title">vietnam drip</h5>
      <p class="card-text">bahan : beans 12gr, susu kental manis 20mg, air panas 150mg. </p>
      <a href="about.php" class="btn btn-primary">menu</a>
    </div>
  </div>
  <div class="card" style="width: 18rem; height: 20rem;">
    <div class="card-body">
      <h5 class="card-title">V60</h5>
      <p class="card-text">bahan : beans 15gr, air panas 230mg. </p>
      <a href="about.php" class="btn btn-primary">menu</a>
    </div>
  </div>
  <div class="card" style="width: 18rem; height: 20rem;">
    <div class="card-body">
      <h5 class="card-title">japanese ice</h5>
      <p class="card-text">bahan : beans 15gr, air panas 230mg, es batu. </p>
      <a href="about.php" class="btn btn-primary">menu</a>
    </div>
  </div>
  <div class="card" style="width: 18rem; height: 20 rem;">
    <div class="card-body">
      <h5 class="card-title">kopi tubruk</h5>
      <p class="card-text">bahan : beans 15gr, air panas. </p>
      <a href="about.php" class="btn btn-primary">menu</a>
    </div>
  </div>
  <div class="card" style="width: 18rem; height: 20 rem;">
    <div class="card-body">
      <h5 class="card-title">matcha</h5>
      <p class="card-text">bahan : bubuk matcha 25gr, gula cair 10mg, air panas 150mg, fresh milk 140mg, es batu (ice). </p>
      <a href="about.php" class="btn btn-primary">menu</a>
    </div>
  </div>
  <div class="card" style="width: 18rem; height: 20rem;">
    <div class="card-body">
      <h5 class="card-title">chocolate</h5>
      <p class="card-text">bahan : bubuk chocolste 25gr, air panas 70mg, susu kental manis 20mg, fresh milk 100mg, es batu (ice). </p>
      <a href="about.php" class="btn btn-primary">menu</a>
    </div>
  </div>
</div> -->
<?php include 'footer.php';  ?>