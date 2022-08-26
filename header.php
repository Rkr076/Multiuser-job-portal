<nav class="navbar navbar-default" role="navigation">
	<div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=""/></a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
             <?php 
                session_start();
                if (isset($_SESSION['type'])) 
                {

	                if ($_SESSION['type']==1 ) {

	                echo '
			        <li><a href="jobs.php">Add job</a></li>
			        <li><a href="categories.php">Categories</a>
			        <li><a href="viewsubmittedapp.php">View Application</a>
			        <li><a href="viewuser.php">View User</a>
			        <li><a href="viewjobs.php">View Jobs</a>
			        </li>
			        <li><a href="logout.php">Logout</a></li>
	                '; 
	                 }

	                 else if($_SESSION['type']== 2)
	                 {
	                  echo '
	                  <li><a href="index.php">Home</a>
			        <li><a href="viewapplication.php">View Application</a>
			        <li><a href="viewjobs.php">View Jobs</a>
			        <li><a href="logout.php">Logout</a></li>
	                '; 

	                 }
                }

                else
	                 {
	                   echo '
	                   <li><a href="index.php">Home</a>
			        <li><a href="viewjobs.php">View Jobs</a>
			        <li><a href="login.php">Login</a></li>
			        <li><a href="register.php">Register</a></li>
	                '; 

	                 }

                

		        ?>
	        </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>