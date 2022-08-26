
<!DOCTYPE HTML>
<html>
<head>
<title>View Users</title>
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
<?php include('connection.php');?>

<br>

<br>
<br>
<div class="container">
<div class="row">   
<div class="col-lg-12">
 <table class="table table-bordered table-striped">
    <tr>
       <th>ID</th>
       <th>Username</th>
       <th>Email</th>
       <th>Password</th>  
    </tr>
    <?php

     $sql = "SELECT * FROM user ";

$res = mysqli_query($conn, $sql);
if(mysqli_num_rows($res) > 0)
{
while ($data = mysqli_fetch_assoc($res))
{            
    ?>
    <tr>
       <td><?php echo $data['userid']; ?></td>
       <td><?php echo $data['name']; ?></td>
       <td><?php echo $data['email']; ?></td>
       <td><?php echo $data['password']; ?></td>   
    </tr>
<?php
}

}

?>

 </table>
</div>
</div>

</div>



<?php include('footer.php');?>

</body>
</html>


