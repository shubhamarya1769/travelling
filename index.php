<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAVELLING.COM</title>
    <!-- head -->
    <?php
    include("common/head.php");
    ?>
</head>
<body>
    <!--1.0.0 header -->
    <?php
    include("common/header.php");
    ?>

    <!-- 2.0.0 Carousel wrapper -->
<div id="carouselExampleInterval"  class="carousel slide mt-2 m-auto"  data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="asset/hero-1.jpeg" class="d-block w-100 " alt="...">
      <div class="position-absolute">
      <h1 >New Delhi</h1>
      <p> capital of india</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="asset/hero-1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="asset/hero-1.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- card -->
 <div style="background-color:">
    <?php
    include("card.php");
    ?>
  </div>

  <!-- poster -->
    <?php
    include("poster.php");
    ?>
    <!-- footer -->
    <?php
    include("common/footer.php");
    ?>
    <!-- bottom -->
    <?php
    include("common/bottom.php");
    ?>
</body>
</html>