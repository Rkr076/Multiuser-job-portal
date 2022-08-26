
<!DOCTYPE HTML>
<html>
<head>
<title>Jobs</title>
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

<?php
if (!isset($_SESSION['type']))
 {
    header("Location:login.php");
}


?>


<div class="container">
<div class="row">
<div class="col-lg-4">
<div class="login-content">
        <form action="jobs.php" method="POST">
            <div class="section-title">
                <h3>Jobs</h3>
            </div>
            <div class="textbox-wrap">
                <div class="input-group">
                    <span class="input-group-addon "><i class="fa fa-user"></i></span>
                    <input type="hidden" value="" name="jobid">
                    <input type="text" required="required" value=""   name="Name" class="form-control" placeholder=" Name">
                </div>
                <div class="input-group">
                    <span class="input-group-addon "><i class="fa fa-user"></i></span>
                    <textarea name="description" id="" class="form-control" placeholder="job description"></textarea>
                </div>
                <div class="input-group">
                    <span class="input-group-addon "><i class="fa fa-user"></i></span>
                    <input type="text" required="required" value=""   name="skill" class="form-control" placeholder="skill">
                </div>
                <div class="input-group">
                    <span class="input-group-addon "><i class="fa fa-user"></i></span>
                    <input type="text" required="required" value=""   name="timing" class="form-control" placeholder="timing">
                </div>
                <div class="input-group">
                    <span class="input-group-addon "><i class="fa fa-user"></i></span>
                    <input type="date" required="required" value=""   name="date" class="form-control" >
                </div>
                <div class="input-group">
                    <span class="input-group-addon "><i class="fa fa-user"></i></span>
                    <input type="text" required="required" value=""   name="salary" class="form-control" placeholder="salary">
                </div>

                <div class="input-group">
                    <span class="input-group-addon "><i class="fa fa-user"></i></span>
                    <textarea name="location" id="" class="form-control" placeholder="location"></textarea>
                </div>
                <div class="input-group">
                    <span class="input-group-addon "><i class="fa fa-user"></i></span>
                   <select name="catid" id="" class="form-control">
                   	<?php
                    $sql ="SELECT * FROM categories";
                    $res = mysqli_query($conn, $sql);
                     if (mysqli_num_rows($res) > 0)
                     {
                      	while ($data2 = mysqli_fetch_assoc($res)) 
                      	{ 		
                     
                     	?>
                        <option value="<?php echo $data2['catid']; ?>"><?php echo $data2['name']; ?></option>
                     	<?php
                        }
                    }

                   	?>
                    
                   </select>
                </div>
            </div>
           <div class="login-btn">
		    <input type="submit" name="addjob" value="Add Jobs">
            <input type="submit" name="updatejob" value="Update Jobs">
		  </div>
         </form>
    </div>
</div>

    <?php
if (isset($_POST['addjob']))
 {
    $name = $_POST['Name'];
    $description = $_POST['description'];
    $skill= $_POST['skill'];
    $timing = $_POST['timing'];
    $date = date("Y-m-d");
    $location = $_POST['location'];
    $salary = $_POST['salary'];
    $catid = $_POST['catid'];

    $sql = "INSERT INTO `jobs`(`name`, `description`, `skill`, `timing`, `date`, `salary`, `location`, `catid`) VALUES ('$name','$description','$skill','$timing', '$date' ,'$salary','$location','$catid')";
    $query = mysqli_query($conn, $sql);
    if ($query)
     {
        echo "<script>alert('records inserted') </script>";
    }

    else
    {
       echo "<script>alert('records not
        inserted') </script>";
    }
}



?>

<div class="col-lg-8">
 <table class="table table-bordered table-striped">
    <tr>
       <th>ID</th>
       <th>Name</th>
       <th>Category</th>
       <th>Description</th>
        <th>Skill</th>
        <th>Timing</th>
        <th>Date</th>
        <th>Salary</th>
       
    </tr>
    <?php
       $sql ="SELECT jobs.jobid, jobs.name, categories.name AS 'catname' ,jobs.description,jobs.skill,jobs.timing,jobs.date,jobs.salary FROM jobs INNER JOIN categories ON  jobs.catid = categories.catid";
         $res = mysqli_query($conn, $sql);
         if (mysqli_num_rows($res) > 0)
          {
             while ($jobdata = mysqli_fetch_assoc( $res))
              {
                 ?>
    <tr>
      <td><?php echo $jobdata['jobid'];  ?></td>
      <td><?php echo $jobdata['name'];  ?></td>
      <td><?php echo $jobdata['catname'];  ?></td>
      <td><?php echo $jobdata['description'];  ?></td>
      <td><?php echo $jobdata['skill'];  ?></td>
      <td><?php echo $jobdata['timing'];  ?></td>
      <td><?php echo $jobdata['date'];  ?></td>
      <td><?php echo $jobdata['salary'];  ?></td>
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


