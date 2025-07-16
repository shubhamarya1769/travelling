<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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

    <div class="container">
        <div class="row">
            <div class="col-6 m-5" style="box-shadow:1px 1px 1px 2px gray;" >
            <div class="mb-3">
            <label for="email">Username or Mobile no.</label>
            <input type="email" class="form-control" id="email">
            <small id="emailHelp" class="form-text text-gray">We'll never share your email with anyone else.</small>
            </div>
            <div class="mb-3">
            <label for="exampleInputIconPassword">Password</label>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon3"><span class="fas fa-unlock-alt"></span></span>
                <input type="password" class="form-control" id="exampleInputIconPassword" placeholder="Password" aria-label="Password" aria-describedby="basic-addon3">
            </div>
            </div>
            <div class="mb-3">
            <input type="submit" class="btn btn-danger" name="">
            </div>
        </div>
    </div>
    </div>


   

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