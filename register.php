<!DOCTYPE HTML>
<html>
<head>
<title> Register</title>
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
<div class="container">
    <div class="single">  
       <div class="form-container">
        <h2>Register Form</h2>
        <form action="register.php" method="POST">
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName"> Name</label>
                <div class="col-md-9">
                    <input type="text" name="name"  class="form-control"/>
                </div>
            </div>
         </div>

         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Email</label>
                <div class="col-md-9">
                    <input type="email" name="email" class="form-control "/>
                </div>
            </div>
        </div>

         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="password">Password</label>
                <div class="col-md-9">
                    <input type="password" name="password" class="form-control"/>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="form-actions floatRight">
                <input type="submit" name="register" value="Register" class="btn btn-primary btn-sm">
            </div>
        </div>
    </form>
    </div>
 </div>
</div>
<?php include('footer.php');   ?>
</body>
</html>

 <?php
include('connection.php');
if (isset($_POST['register']))
 {
    $name = $_POST['name'];
    $email = $_POST['email'];  
    $password = $_POST['password']; 
    $roletype = $_POST['roletype']; 
    $sql = "INSERT INTO `user`(`name`, `email`, `password`, `roletype`) VALUES ('$name','$email','$password',' $roletype')";
    $query = mysqli_query($conn, $sql);
    if ($query)
     {
        echo "<script>alert('records inserted') </script>";
        header("Location:login.php");
    }

    else
    {
       echo "<script>alert('records not inserted') </script>";
    }
}



?>
