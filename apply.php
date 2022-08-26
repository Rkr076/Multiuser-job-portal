<!DOCTYPE HTML>
<html>
<head>
<title> Apply now</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Seeking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
</head>
<body>
<?php include('header.php'); ?>
<?php include('connection.php');
    print_r($_SESSION);
 ?>
<div class="container">
    <div class="single">  
	 <div class="col-md-8 single_right">
	 	   <div class="login-form-section">
                <h3>Apply Now</h3>
                <form action="apply.php" method="POST" enctype="multipart/form-data" >
         <div class="row">
            <div class="form-group col-md-12">
                
                <div class="col-md-9">
                    <input type="file" required="required" name="file" value="" class="form-control "/>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="form-actions floatRight">
                <input type="submit" name="apply" value="apply" class="btn btn-primary btn-sm">
            </div>
        </div>
    </form>
                
         </div>
   </div>
  <div class="clearfix"> </div>
 </div>
</div>
<?php include('footer.php'); ?>
</body>
</html>	


 <?php
include('connection.php');

if(isset($_POST['apply']))
 {
    $id = $_SESSION['jbid'];
    $userid=$_SESSION['userid'] ;
    $date = date("Y-m-d");

    $file_name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    move_uploaded_file($tmp_name, "uploads/".$file_name);

    $sql= "INSERT INTO `application`(`userid`, `jobid`, `cv`, `date`) VALUES ('$userid','$id','$file_name','$date')";
    $res=mysqli_query($conn, $sql);
    if($res)
    {
      echo ' <script>alert("Application submitted successfully") </script>';
      echo "<script>window.location.href='index.php' </script>";
    }

    else
    {
      echo ' <script>alert("Application not submitted") </script>';
   
    }

}



?>