<?php
error_reporting(0);
if(isset($_POST['submit']))
{
  $id = $_POST['enrollment'];
  $connect = mysqli_connect("localhost", "techradi_erp", "Goga@4642","techradi_erp");
  $query = "SELECT `image` FROM `certificate` WHERE `enrollment` = $id LIMIT 1";
  $result = mysqli_query($connect, $query);
  if(@mysqli_num_rows($result) > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $image = $row['image'];
    }  
  }
  else {
    echo "Enrollment Number Not Found";
    $image = "";
  }
  @mysqli_free_result($result);
  mysqli_close($connect);
}
else{
  $image = "";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Techradix</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="style.css" rel="stylesheet">
</head>

<body  style="background-color: #2196f3">

  <div class="container">


    <div class="container col-md-12 col-sm-12">
      <form action="https://verify.techradix.in/image.php" class="form-signin" method="POST" id="Login">
        <br><br><br><br><br><br><br><br><br><br>
        <img src="../erp/certificate/<?php echo $image;?>" height="350" width="350">
      </form>
    </div>

  </div>


</body>
</html>