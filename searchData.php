<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Display Search Data</title>
    <link rel="stylesheet" href="hhtps://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  </head>
  <body>
    <?php
$data=$_GET['data'];
//echo $data;
$sql="Select * from 'seriescrud' where id=$data";
$result=mysql_query($con,$sql);
if($result){
  $row=mysql_fetch_assoc($result);
  echo '<div class="container">
  <div class="jumbotron">
    <h1 class="display-4 text-center text-success">'.$row['fname'].'</h1>
    <p class="lead text-center text-danger">Your Email id is : '.$row['email'].'</p>
    <hr class="my-4">
    <a class="btn btn-dark btn-lg" href="search.pph" role="button">Back</a>
  </div>
</div>';
}

    ?>
    
  </body>
</html>