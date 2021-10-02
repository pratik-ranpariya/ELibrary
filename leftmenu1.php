<?php 
// session_start();
$conn = mysqli_connect("localhost", "root", "", "library");
if(empty($_SESSION['email']))
{
 header('Location:studentlogin.php');
}

$email = $_SESSION['email'];
$query = "SELECT * FROM register WHERE email='$email'";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);

?>
<!-- start:Left Menu -->
<div id="left-menu">
  <div class="sub-left-menu scroll">
    <ul class="nav nav-list">
      <li><div class="left-bg"></div></li>
      <li class="time">
        <h1 class="animated fadeInLeft">12:00</h1>
        <p class="animated fadeInRight">Sat,October 1st 2029</p>
      </li>

      <?php
      
      if($result['hardware']==1){
        echo                       '<li class="ripple"><a href="profile.php" class="nav-header">
        <span class="fa-home fa"></span> Hardware  
        <span class="fa-angle-right fa right-arrow text-right"></span>
        </a></li>'; 

      }else{
        echo "";
      }

      if($result['networking']==1){
        echo                       '<li class="ripple"><a href="comptianetwork.php" class="nav-header">
        <span class="fa-home fa"></span> networking  
        <span class="fa-angle-right fa right-arrow text-right"></span>
        </a></li>'; 

      }else{
        echo "";
      }                    
      if($result['cisco']==1){
        echo                       '<li class="ripple"><a href="cisco.php" class="nav-header">
        <span class="fa-home fa"></span> cisco  
        <span class="fa-angle-right fa right-arrow text-right"></span>
        </a></li>'; 

      }else{
        echo "";
      }                    
      if($result['microsoft']==1){
        echo                       '<li class="ripple"><a href="microsoft.php" class="nav-header">
        <span class="fa fa-windows"></span> microsoft  
        <span class="fa-angle-right fa right-arrow text-right"></span>
        </a></li>'; 

      }else{
        echo "";
      }                   
      if($result['redhetserver']==1){
        echo                       '<li class="ripple"><a href="linux.php" class="nav-header">
        <span class="fa-home fa"></span> redhetserver  
        <span class="fa-angle-right fa right-arrow text-right"></span>
        </a></li>'; 

      }else{
        echo "";
      }                    
      if($result['virtualization']==1){
        echo                       '<li class="ripple"><a href="virtualization.php" class="nav-header">
        <span class="fa-home fa"></span> virtualization  
        <span class="fa-angle-right fa right-arrow text-right"></span>
        </a></li>'; 

      }else{
        echo "";
      }                    
      if($result['ethicalhacking']==1){
        echo                       '<li class="ripple"><a href="ethicalhacking.php" class="nav-header">
        <span class="fa-home fa"></span> ethicalhacking  
        <span class="fa-angle-right fa right-arrow text-right"></span>
        </a></li>'; 

      }else{
        echo "";
      }                    
      if($result['cloudcomputing']==1){
        echo                       '<li class="ripple"><a href="cloud.php" class="nav-header">
        <span class="fa fa-soundcloud"></span> cloudcomputing  
        <span class="fa-angle-right fa right-arrow text-right"></span>
        </a></li>'; 

      }else{
        echo "";
      }

      

      ?>  

    </ul>
  </div>
</div>
