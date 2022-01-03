<?php
session_start();
 require('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Online feedback System</title>
	
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:#2B1B17">
        <div class="container" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color:#F9966B">Student feedback System</a>
				
				
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
					 <li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="index.php"><i class="fa fa-home fa-fw"></i>Home</a>
                    </li>
					
					<li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="index.php?info=about"><i class="fa fa-home fa-fw"></i>About</a>
                    </li>
					
					<li><a style="color:#FFFFFF" href="index.php?info=registration"><i class="fa fa-sign-out fa-fw"></i>Registration</a></li>
				
				
								
	<li class="dropdown">
        <a style="color:#FFFFFF" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-fw"></i>Login
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="index.php?info=login">Student</a></li>
		  <li><a href="index.php?info=faculty_login">Faculty</a></li> 
          <li><a href="admin">Admin</a></li> 
        </ul>
      </li> 
	  
	
	  
	  
	 <li>
                        <a style="color:#FFFFFF" href="index.php?info=contact"><i class="fa fa-phone fa-fw"></i>Contact</a>
                    </li>
					 	
					
                   

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php 
					@$info=$_GET['info'];
					if($info!="")
					{
											
						 if($info=="about")
						 {
						 include('about.php');
						 }
						
						
						
						

						 
						 else if($info=="contact")
						 {
						 include('contact.php');
						 }
						
						
						 
						 
						 else if($info=="login")
						 {
						 include('login.php');
						 }
						 
						  else if($info=="faculty_login")
						 {
						 include('faculty_login.php');
						 }
						 
						 
						 else if($info=="registration")
						 {
						 	include('registration.php');
						 }
					}
					else
					{
				?>
		<!-- slider start -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                
                <div class="fill" style="background-image:url('images/img1.jpg');"></div>
				<div class="carousel-caption">
                    
                </div>
            </div>
           
            <div class="item">
                <div class="fill" style="background-image:url('images/img3.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			 <div class="item">
                <div class="fill" style="background-image:url('images/img4.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			
			
			
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
<!-- slider -->			
	
	
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
               
				
				
				
	
	
				
				
				
			<div class="col-sm-10" style="margin-top:60px;margin-bottom:300px; background=#F6BE00">
				<h2>Student feedback System</h2>
                <p>
				Student Feedback System for college students have been developed which aims to rate and analyze the college faculty’s performance. This type of Student Feedback system reduces, the strenuous work of physically examining the feedback pages of each and every student. The system also reduces the burden of efforts and burden of keeping and maintaining the records on a manual base, it requires a lot of space and safety to keep up such records. Also, the student’s feedbacks can be tempered for wrong reasons in case of paper-based feedbacks wherein the SFS will always ensure safety of feedbacks privacy.
                    </p>
<p2>
    Another important features of the SFS are that physical presence of neither the admin nor the student is required for the either giving the feedback nor for assessing the feedback. Also, further enhancement can be done and more features can be added for better retrieval of the feedback details.
</p2>
          <h3>Features</h3>
          <ul>•	This system is developed mainly for the purpose of students to give their feedback about their teacher.</ul>
          <ul>•	Faculty can view their semester performance in this system.</ul>
          <ul>•	This system is developed for the exclusively for the engineering colleges students and lecturers.</ul>
          <ul>•	Student has to register with their registered Gmail Id and have to create password.</ul>
          <ul>•	Admin can register faculty details.</ul>
          <ul>•	Student has to login with the username and give their Feedback in their profile.</ul>
        <h4>  System Actors(Users)</h4>
                	Admin <hr>
              <ul>  	Faculty</ul>
              <ul>  	Student</ul>
              <ul>  	Admin Features</ul>
               <ul> 	Admin Login</ul>
              <ul>  	Admin can add new faculty</ul>
              <ul>  	Admin can View faculty list</ul>
               <ul> 	Admin can Update faculty data</ul>
               <ul> 	Admin can Delete faculty</ul>
<ul>	Admin can Manage Student</ul>
               <ul> 	Admin can Check feedback given by student</ul>
               <ul> 	Admin can check average feedback for faculty</ul>
              <ul>  	Admin can update the contact details dynamically</ul>
              <ul>  	Admin can update password</ul>
              	Faculty Features<hr>
              <ul>  	Faculty can login</ul>
              <ul>  	Faculty can update their profile</ul>
              <ul>  	Faculty can update Password</ul>
               	Student Features<hr>
               <ul> 	Student can Register</ul>
              <ul> 	Student can Login</ul>
              <ul>  	Student can view profile</ul>
              <ul>  	Student can update profile</ul>
             <ul>   	Student can update Password</ul>
               <h5>Requirements</h5>
              <ul>  	XAMPP server </ul>
              <ul>  	Visual Studio Code</ul>
               	Language Used <hr>
               <ul> o	Front End : HTML 5 ,BOOTSTRAP</ul>
              <ul>o	Server Language : PHP 5.5</ul>
              <ul>o	Backend : MySQL</ul>

			</div>
			
			
			
			
				<?php } ?>
            </div>
            
    </div>
    <!-- /.container -->
	
	<div class="navbar-fixed-bottom nav navbar-inverse text-center" style="colour=#F9966B; padding:15px;height: 60px; background:#2B1B17">
		<span style="color:#F9966B">Developed By ...	<a> 19CM008, 19CM009, 19CM029, 19CM065, 20CM204</a> </span>
	</div>
    <!-- jQuery -->
    <script src="css/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
