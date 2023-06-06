<!DOCTYPE html>
<html>

<head>
    <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css"
        href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8"
        src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>

<body>

    <div class="container">
        <div class="col-lg-12">
            <br><br>
            <h1 class="text-warning text-center"> Display Table Data </h1>
            <br>
            <table id="tabledata" class=" table table-striped table-hover table-bordered">

                <tr class="bg-dark text-white text-center">

                    <th> Id </th>
                    <th> blogImage </th>
                    <th> blogAddress </th>
                    <th> blogContact </th>
                    <th> blogEmail </th>
                    <th> blogEvent_Offer </th>
                    <th> blogService </th>
                    <th> Update </th>
                    <th> Delete </th>


                </tr>

                <?php

 include 'connection.php'; 
 $q = "select * from blogDetail";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
                <tr class="text-center">
                    <td> <?php echo $res['id'];  ?> </td>
                    <td><img src="images/<?php echo $res['blogImage'];  ?>" alt=""width="60" height="60"> </td>
                    <td> <?php echo $res['blogAddress'];  ?> </td>
                    <td> <?php echo $res['blogContact'];  ?> </td>
                    <td> <?php echo $res['blogEmail'];  ?> </td>
                    <td> <?php echo $res['blogEvent_Offer'];  ?> </td>
                    <td> <?php echo $res['blogService'];  ?> </td>
                    <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>"
                                class="text-white"> Delete </a> </button> </td>
                    <td> <button class="btn-primary btn"> <a href="blogUpdate.php?id=<?php echo $res['id']; ?>"
                                class="text-white"> Update </a> </button> </td>

                </tr>

                <?php 
 }
  ?>

            </table>

        </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#tabledata').DataTable();
    })
    </script>

</body>

</html>