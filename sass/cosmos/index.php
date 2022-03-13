<?php
$title = "BFA Cosmos Home";
$long_title = "Balmoral Family Adventure's Cosmos";
$page_blerb = "A broad discipline covering scientific, religious or philosophical aspects of the cosmos and its nature, including spiritual entities or other matters deemed to exist outside our physical universe."; //from https://en.wikipedia.org/wiki/Cosmos
?>
<!doctype html>
<html lang="en">
<head>
<!-- generic head info in php include file -->
    <?php include '../head.php';?>
</head>
<body>
<section id="header">
<!-- generic header info in php include file -->
    <?php include '../header.php';?>
</section>
<section id="main">
    <div class="container">
              <div class="row">
                <div class="col s12 m3"><div class="card blue-grey darken-1">
                  <div class="card-content white-text">
                    <span class="card-title">Realms of Existence</span>
                    <p>The cosmos teems with a multitude of worlds as well as myriad alternate dimensions of reality, called the Realms of Existence.</p>
                  </div>
                  <div class="card-action">
                    <a href="realms.php" class="waves-effect waves-light btn"><i class="material-icons left">bubble_chart</i>see more</a>
                  </div>
                </div>
              </div>
                <div class="col s12 m3"><div class="card blue-grey darken-1">
                  <div class="card-content white-text">
                    <span class="card-title">Our Galaxy</span>
                    <p>The Lambda Draconian Galaxy: is a barred spiral galaxy, about one million light-years across.</p>
                  </div>
                  <div class="card-action">
                    <a href="galaxy.php" class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>see more</a>
                  </div>
                </div>
              </div>
                <div class="col s12 m3"><div class="card blue-grey darken-1">
                  <div class="card-content white-text">
                    <span class="card-title">Solar System</span>
                    <p>The Solar System is the gravitational bound system of the Sun and the objects that orbit it, either directly or indirectly.</p>
                  </div>
                  <div class="card-action">
                    <a href="solar-system.php" class="waves-effect waves-light btn"><i class="material-icons left">brightness_1</i>see more</a>
                  </div>
                </div>
              </div>
              <div class="col s12 m3"><div class="card blue-grey darken-1">
                <div class="card-content white-text">
                  <span class="card-title">Our Planet</span>
                  <p>Uthea is the third planet from the Sun @ about one astronomical unit or (150,000,000 km) and the only astronomical object known to harbour and support living life.</p>
                </div>
                <div class="card-action">
                  <a href="earth.php" class="waves-effect waves-light btn"><i class="material-icons left">brightness_1</i>see more</a>
                </div>
              </div>
            </div>
            </div>
  </section>
<section id="footer">
<!-- generic footer info in php include file -->
    <?php include '../footer.php';?>
</section>
</body>
</html>