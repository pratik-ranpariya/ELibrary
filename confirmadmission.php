<?php
session_start();
error_reporting(0);
include('config.php');
if(empty($_SESSION['username']))
{
 header('Location:'.URL);
} 

$id=$_REQUEST['no'];
$pa=mysqli_query($conn,"select * from `register` where  no='$id'");
$df=mysqli_fetch_array($pa);

if(isset($_REQUEST['submit'])){



 extract($_POST);
 $hardware=implode(",",$arr1);
 $networking=implode(",",$arr2);
 $cisco=implode(",",$arr3);
 $microsoft=implode(",",$arr4);
 $redhetserver=implode(",",$arr5);
 $virtualization=implode(",",$arr6);
 $ethicalhacking=implode(",",$arr7);
 $cloudcomputing=implode(",",$arr8);

 $isEmptey=$hardware;
 if($isEmptey=='1'){
  $isEmptey="1";
}else{
  $isEmptey="0";
}   
$isEmpteys=$networking;
if($isEmpteys=='1'){
  $isEmpteys="1";
}   else{
  $isEmpteys="0";
}
$isEmptey1=$cisco;
if($isEmptey1=='1'){
  $isEmptey1="1";
}   else{
  $isEmptey1="0";
}
$isEmptey2=$microsoft;
if($isEmptey2=='1'){
  $isEmptey2="1";
}   else{
  $isEmptey2="0";
}
$isEmptey3=$redhetserver;
if($isEmptey3=='1'){
  $isEmptey3="1";
}   else{
  $isEmptey3="0";
}
$isEmptey4=$virtualization;
if($isEmptey4=='1'){
  $isEmptey4="1";
}   else{
  $isEmptey4="0";
}
$isEmptey5=$ethicalhacking;
if($isEmptey5=='1'){
  $isEmptey5="1";
}   else{
  $isEmptey5="0";
}
$isEmptey6=$cloudcomputing;
if($isEmptey6=='1'){
  $isEmptey6="1";
}else{
  $isEmptey6="0";
}

$sql = "UPDATE register SET name='$name', mobile='$mobile',enrollment='$enrollment',email='$email',hardware='$isEmptey',networking='$isEmpteys',cisco='$isEmptey1',microsoft='$isEmptey2',redhetserver='$isEmptey3',virtualization='$isEmptey4',ethicalhacking='$isEmptey5',cloudcomputing='$isEmptey6' WHERE no='$id'";
mysqli_query($conn, $sql);

header('location:'.SITE_URL.'index.php');
}


?>




<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Techradix</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/icheck/skins/flat/red.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/normalize.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/icheck/skins/flat/red.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/nouislider.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/select2.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/ionrangeslider/ion.rangeSlider.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/ionrangeslider/ion.rangeSlider.skinFlat.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/bootstrap-material-datetimepicker.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/logomi.png">

</head>

<body id="mimin" class="dashboard">
  <!-- start: Header -->
  <?php include('header.php'); ?>
  <!-- end: Header -->

  <div class="container-fluid mimin-wrapper">

    <?php include('leftmenu.php') ?>


    <!-- start: Content -->
    <div id="content">
      <div class="panel box-shadow-none content-header">
        <div class="panel-body">
          <div class="col-md-12">
            <h3 class="animated fadeInLeft">Form Element</h3>
            <p class="animated fadeInDown">
              Form <span class="fa-angle-right fa"></span> Form Element
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="col-md-12 panel">
          <div class="col-md-12 panel-heading">
            <h4>Mask</h4>
          </div>
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="col-md-12 panel-body">

              <div class="col-md-12">
                <!-- <form action="" method="POST" enctype="multipart/form-data"> -->
                 <div class="col-md-6">
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" name="name" value="<?php echo $df['name'];?>" class="form-text mask-text">
                    <span class="bar"></span>
                    <label>Name</label>
                  </div>

                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" name="email" value="<?php echo $df['email'];?>" class="form-text mask-text">
                    <span class="bar"></span>
                    <label>Email</label>
                  </div>

                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" name="enrollment" value="<?php echo $df['enrollment'];?>" class="form-text mask-text">
                    <span class="bar"></span>
                    <label>Enrollment</label>
                  </div>

                  <a href="javascript:;" onclick="phone_btn_onclick();" class="forgot-password">
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="text" name="mobile" id="forget-mobile-no" value="<?php echo $df['mobile'];?>" class="form-text mask-text">
                      <span class="bar"></span>
                      <label>Mobile</label>
                    </div></a>

                </div>
                  <table>
                    <tr><br><br>
                      <?php $chkbox1=$df['hardware']; $arr1=explode(",",$chkbox1); ?>
                      <td><input <?php if(in_array("1",$arr1)){echo "checked";}?> type="checkbox" name="arr1[]" value="1" /></td>
                      <td>HARDWARE&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                    </tr>

                    <td>
                      <?php $chkbox2=$df['networking']; $arr2=explode(",",$chkbox2); ?><input <?php if(in_array("1",$arr2)){echo "checked";}?> type="checkbox"  name="arr2[]" value="1"/></td>
                      <td>NETWORKING</td>

                      <tr>
                        <td><?php $chkbox3=$df['cisco']; $arr3=explode(",",$chkbox3); ?><input <?php if(in_array("1",$arr3)){echo "checked";}?> type="checkbox"   name="arr3[]" value="1"  /></td>
                        <td>CISCO</td>
                      </tr>
                      <tr>
                        <?php $chkbox4=$df['microsoft']; $arr4=explode(",",$chkbox4); ?>
                        <td><input <?php if(in_array("1",$arr4)){echo "checked";}?> type="checkbox" name="arr4[]" value="1" /></td>
                        <td>MICROSOFT</td>
                      </tr>
                      <tr>
                        <td><?php $chkbox5=$df['redhetserver']; $arr5=explode(",",$chkbox5); ?><input <?php if(in_array("1",$arr5)){echo "checked";}?> type="checkbox" name="arr5[]" value="1" /></td>
                        <td>REDHET SERVER</td>
                      </tr>
                      <tr>
                        <td><?php $chkbox6=$df['virtualization']; $arr6=explode(",",$chkbox6); ?><input <?php if(in_array("1",$arr6)){echo "checked";}?> type="checkbox" name="arr6[]" value="1" /></td>
                        <td>VIRTUALIZATION</td>
                      </tr>
                      <tr>
                        <td><?php $chkbox7=$df['ethicalhacking']; $arr7=explode(",",$chkbox7); ?><input <?php if(in_array("1",$arr7)){echo "checked";}?> type="checkbox" name="arr7[]" value="1" /></td>
                        <td>ETHICAL HACKING</td>
                      </tr>
                      <tr>
                        <td><?php $chkbox8=$df['cloudcomputing']; $arr8=explode(",",$chkbox8); ?><input <?php if(in_array("1",$arr8)){echo "checked";}?> type="checkbox" name="arr8[]" value="1" /></td>
                        <td>CLOUD COMPUTING</td>
                      </tr>
                    </table>
                    <div class="col-md-12">
                      <input class="submit btn btn-danger" type="submit" name="submit" value="Submit">
                    </div>

                  </div>

                </div>

              </form>
            </div>
          </div>
        </div>

        <?php include('mobileleftmenu.php') ?>
        <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
          <span class="fa fa-bars"></span>
        </button>
        <!-- end: Mobile -->

        <!-- start: Javascript -->
        <script src="asset/js/jquery.min.js"></script>
        <script src="asset/js/jquery.ui.min.js"></script>
        <script src="asset/js/bootstrap.min.js"></script>
        <!-- plugins -->
        <script src="asset/js/plugins/icheck.min.js"></script>
        <script src="asset/js/plugins/moment.min.js"></script>
        <script src="asset/js/plugins/jquery.knob.js"></script>
        <script src="asset/js/plugins/ion.rangeSlider.min.js"></script>
        <script src="asset/js/plugins/bootstrap-material-datetimepicker.js"></script>
        <script src="asset/js/plugins/jquery.nicescroll.js"></script>
        <script src="asset/js/plugins/jquery.mask.min.js"></script>
        <script src="asset/js/plugins/select2.full.min.js"></script>
        <script src="asset/js/plugins/nouislider.min.js"></script>
        <script src="asset/js/plugins/jquery.validate.min.js"></script>
        <!-- custom -->
        <script src="asset/js/main.js"></script>

        <script type="text/javascript">
          $(document).ready(function(){

            $('.mask-placeholder').mask("00/00/0000");

          });
        </script>
        <script type="text/javascript">
          (function(jQuery){
           $('input').iCheck({
            checkboxClass: 'icheckbox_flat-red',
            radioClass: 'iradio_flat-red'
          });
         })(jQuery);
       </script>
     </body>
     </html>
