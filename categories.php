
<!DOCTYPE html>
<html>
<head>
	<title>Categories</title>
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
</head>
<body>
<?php
include('header.php');
include('connection.php');
error_reporting(0);
$id = $_GET['id'];
$sql1 = "SELECT * FROM `categories` WHERE catid='$id' ";
$res1 = mysqli_query($conn ,$sql1);
$row1 = mysqli_fetch_assoc($res1);
?>
	<div class="container">
	<div class="row">
	<div class="col-lg-4">
	<div class="login-content">
        <form action="categories.php" method="POST">
            <div class="section-title">
                <h3>Categories</h3>
            </div>
            <div class="textbox-wrap">
                <div class="input-group">
                    <span class="input-group-addon "><i class="fa fa-user"></i></span>
                    <input type="hidden" value="<?php echo $row1['catid']; ?>" name="cid">
                    <input type="text" required="required" value="<?php echo $row1['name']; ?>"   name="Name" class="form-control" placeholder="Name">
                </div>
            </div>
           <div class="login-btn">
		    <input type="submit" name="addcat" value="Add Category">
            <input type="submit" name="updatecat" value="Update Category">
		  </div>
         </form>
    </div>
	</div>

	<div class="col-lg-8">
      <table class="table">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Action</th>
        </tr>
        <?php
        include('connection.php');
         $sql ="SELECT * FROM categories";
         $res = mysqli_query($conn, $sql);
         if (mysqli_num_rows($res) > 0)
          {
             while ($row = mysqli_fetch_assoc( $res))
              {
                 ?>
          <tr>
          <td><?php echo $row['catid']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td>
            <a href="categories.php?id=<?php echo $row['catid']; ?>" class="btn btn-primary" >Edit</a>
            <a href="categories.php?id=<?php echo $row['catid']; ?>" class="btn btn-danger" >Delete</a>
          </td>
        </tr>

                 <?php
             }
         }

        ?>
      </table>
	</div>
	</div>
	</div>
<?php
include('footer.php');
?>

</body>
</html>



<?php

if (isset($_POST['addcat'])) 
{
    
	$catname=$_POST['Name'];
	 $sql = "INSERT INTO `categories`(`name`) VALUES ('$catname')";
   echo  $query = mysqli_query($conn, $sql);
    if ($query) 
    {
        echo "<script> alert('Records added.') </script>";
    }
    else
    {
      echo "<script> alert('Records not added.')</script>";
    }
}



//update code

if (isset($_POST['updatecat'])) 
{

    $cid=$_POST['cid'];
    $catname=$_POST['Name'];

     $sql2 = "UPDATE `categories` SET `name`='$catname' WHERE catid = '$cid' ";
   $query1 = mysqli_query($conn, $sql2);
    if ($query1) 
    {
        echo "<script> alert('Records updated.') </script>";
    }
    else
    {
      echo "<script> alert('Records not updated.')</script>";
    }
}


//delete code


     if ($_GET['id'] ) 
     {
        $sql3 = "DELETE FROM `categories` WHERE catid='$id' ";
       $query2 = mysqli_query($conn, $sql3);
        header("Location:categories.php");

     }
        




?>