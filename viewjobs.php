
<!DOCTYPE HTML>
<html>
<head>
<title>Latest Jobs</title>
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
<?php include('connection.php'); ?>
<div class="container">
    <div class="single">  
       <div class="box_2">
       	<h3>All Jobs</h3>
       	 <?php
       $sql ="SELECT jobs.jobid, jobs.name, categories.name AS 'catname' ,jobs.description,jobs.skill,jobs.timing,jobs.date,jobs.salary,jobs.location FROM jobs INNER JOIN categories ON  jobs.catid = categories.catid ORDER BY jobs.jobid DESC";
         $res = mysqli_query($conn, $sql);
         if (mysqli_num_rows($res) > 0)
          {
             while ($jobdata = mysqli_fetch_assoc( $res))
              {
                 ?>
     <div class="col-md-4 icon-service">
       		<div class="icon">
				<i class="fa fa-calendar"></i>
			</div>
			<div class="icon-box-body">
				<h4><?php echo $jobdata['name'];  ?></h4>
				<small>(<?php echo $jobdata['catname']; ?> )</small>
				<p><?php echo $jobdata['description'];  ?></p>
				<p><?php echo $jobdata['skill'];  ?></p>
				<p><?php echo $jobdata['salary'];  ?></p>
				<p><?php echo $jobdata['location'];  ?></p>
        <p><?php echo $jobdata['timing'];  ?></p>
        <div class="col-sm-2">
         <a href="single.php?jbid=<?php echo $jobdata['jobid']; ?>" class="btn btn-primary">More details</a>
        </div>
			</div>
		</div>
		<?php 
	          }
     }
		?>
		<center>
	</center>
      </div>
	</div>
</div>
<?php include('footer.php'); ?>
</body>
</html>	