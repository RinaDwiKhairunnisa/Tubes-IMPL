<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Data</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>

<div class="container my-5">
  <form method="post">
    <input type="text" placeholder="Search Data" name="Search">
    <button class="btn btn-dark btn-sm" name="Submit">Search</button>
  </form>
  <div class="container my-5">
    <table class="table">
      <?php
if(isset($_POST['submit'])){
  $search=$_POST['search'];

  $sql="Select * from 'seriescrud' where id like '%$search%'
  or fname like '%$search%' or lname like '%$search%'";
  $result=mysqli_query($con,$sql);
  if($result){
  if(mysqli_num_rows($result)>0){
    echo '<thead>
    <tr>
    <th>S1 no</th>
    <th>Fist Name</th>
    <th>Last Name</th>
    </tr>
    </thead>
    ';
    while($row=mysqli_fetch_assoc($result)){
    echo '<t body>
    <tr>
    <td><a href="searchData.php?data='.$row['id'].'</a></td>
    <td>'.$row['fname'].'</td>
    <td>'.$row['lname'].'</td>
    </tr>
    </tbody>';
    }
  }else{
    echo'<h2 class=text-danger>Data not found</h2>';
  }
  }

}


?>

    </table>
  </div>
</div>
</body>
</html>
