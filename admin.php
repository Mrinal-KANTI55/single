<?php

include 'connection.php';

if(isset($_POST['done'])){

 $Type = $_POST['Type'];
 $FoodName = $_POST['FoodName'];
 $FoodDetail = $_POST['FoodDetail'];

 $FoodImage = $_FILES['image']['name'];
 $FoodImageTempLoc = $_FILES['image']['tmp_name'];
 $uploads ='images/'.$FoodImage;

 $q = " INSERT INTO `foodDetail`(`Type`, `FoodName`, `FoodDetail`, `FoodImage`) VALUES ('$Type','$FoodName','$FoodDetail','$FoodImage')";

 if (mysqli_query($con,$q) == TRUE){
    if(move_uploaded_file( $FoodImageTempLoc,$uploads) == TRUE){
    echo " data insert ";
    }
 }else{
    echo "data not found";
 }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="javascript:void(0)"><img
                        src="https://www.logodesign.net/logo/smoking-burger-with-lettuce-3624ld.png" alt="logo"
                        width="30" height="30"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blogDetail.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="displaySlider.php">Slider</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="displayServices.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="displayOffer.php">Offer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="displayEvent.php">Event</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="col-lg-6 m-auto ">
        <form method="POST" enctype="multipart/form-data">
            <br><br>
            <div class="card mt-3">

                <div class="card-header bg-dark">
                    <h1 class="text-white text-center"> Insert Food Information </h1>
                </div><br>
                <label> Type: </label>
                <input type="text" name="Type" class="form-control"> <br>

                <label> FoodName: </label>
                <input type="text" name="FoodName" class="form-control"> <br>

                <label> FoodDetail: </label>
                <input type="text" name="FoodDetail" class="form-control"> <br>

                <label> FoodImage: </label>
                <input type="file" name="image" class="form-control"> <br>

                <button class="btn btn-success" type="submit" name="done"> Add Block </button>
            </div>
        </form>
    </div>
</body>

</html>