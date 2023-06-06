<?php

include 'connection.php';
 $Blog = "SELECT * FROM `blogDetail`";
 $q = " SELECT * FROM `foodDetail` WHERE Type LIKE 'slider' ";
 $event = " SELECT * FROM `foodDetail` WHERE Type LIKE 'event' ";
 $Offer = " SELECT * FROM `foodDetail` WHERE Type LIKE 'offer' ";
 $Services = " SELECT * FROM `foodDetail` WHERE Type LIKE 'services' ";
 $BlogData = mysqli_query($con,$Blog);
 $data = mysqli_query($con,$q);
 $EventData = mysqli_query($con,$event);
 $EventOffer = mysqli_query($con,$Offer);
 $EventServices = mysqli_query($con,$Services);

 $result=mysqli_fetch_assoc($BlogData);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Food Valley</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="javascript:void(0)"><img src="images/<?php echo $result['blogImage'] ?>"
                        alt="logo" width="30" height="30"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="javascript:void(0)">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Offer">Offer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php">Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <?php 
                while($res=mysqli_fetch_assoc($data)){
            ?>
            <div class="row carousel-item active ">
                <img src="images/<?php echo $res['FoodImage'] ?>" alt="Los Angeles" class="d-block" style="width:100%">
                <div class="carousel-caption row">
                    <h4 class="col-4"><?php echo $res['FoodDetail']?>
                    </h4>
                </div>
            </div>
            <?php } ?>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <div id="Offer" class="row">
        <h2 class="text-danger text-center my-5"><?php echo $result['blogEvent_Offer']?></h2>
        <div class="col-sm-6 col-md-8">
            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <?php 
                    while($res=mysqli_fetch_assoc($EventData)){
                ?>
                    <div class="carousel-item active">
                        <img src="images/<?php echo $res['FoodImage'] ?>" alt="Los Angeles" class="d-block"
                            style="width:100%">
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <?php 
                      while($res=mysqli_fetch_assoc($EventOffer)){
                    ?>
                    <div class="carousel-item active">
                        <h4 class="py-3 text-center "><?php echo $res['FoodDetail']?>
                        </h4>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <div id="Services">
        <h2 class="text-danger text-center my-5"><?php echo $result['blogService']?></h2>
        <div class="row">
            <?php 
                while($res=mysqli_fetch_assoc($EventServices)){
            ?>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                <div class="card">
                    <img src="images/<?php echo $res['FoodImage'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo $res['FoodName']?></h5>
                        <p class="card-text"><?php echo $res['FoodDetail']?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <footer id="Contact">
        <div class="container mt-5">
            <div class="row mt-5">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <a href="#"><img src="images/<?php echo $result['blogImage'] ?>" alt="logo"
                            class="card-img-top mr-3" max-width="100%"></a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h4 class="text-center">Office Addresses:</h4>
                    <p class="text-center"><?php echo $result['blogAddress'] ?></p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h4 class="text-center">Call:</h4>
                    <p class="text-center"><?php echo $result['blogContact'] ?></p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h4 class="text-center">Email:</h4>
                    <p class="text-center"><?php echo $result['blogEmail'] ?></p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>