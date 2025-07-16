<?php
session_start();
?>

<nav class="navbar navbar-light " style="background:#CC0066;">
  <div class="container">
    <a class="navbar-brand fw-bold fs-1.5" style="color:white">
        <img src="asset/icon2.jpeg" alt="" width="30" height="24" class="d-inline-block align-text-top">
     TRAVELLING.COM</a>
         
    <div class="d-flex">

      <?php
        if(isset($_SESSION['username'])){?>
      <button class="btn btn-color-c m-1 p-1 " type="submit"><a  class="m-1 p-1 text-none-c" href="logout.php"> Logout</a></button>
      <p class=""><?php echo $_SESSION['username'];?><p>
       <?php }else{?>

    
      <button class="btn btn-color-c m-1 p-1 " type="submit"><a  class="m-1 p-1 text-none-c" href="registration.php"> Registration</a></button>
      <button class="btn btn-color-c m-1 p-1" type="submit"><a  class="m-1 p-1 text-none-c" href="../login.php"> Login</a></button>
      <?php }?>
    </div> 
  </div>
</nav>

<!-- nav-menu -->
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #CC0066; " >
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse "  id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0  ">
        <li class="nav-item">
          <a class="nav-link pink " href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-none-c pink" href="#">Stay</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link pink dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Holiday Destination
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link pink" href="#">Flight</a>
        </li>
        <li class="nav-item">
          <a class="nav-link pink" href="#">Train</a>
        </li>
        <li class="nav-item">
          <a class="nav-link pink" href="#">Bus</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>