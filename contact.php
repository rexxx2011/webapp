<?php 
if(isset($_POST["send"])){
	$firstname=$_POST["fname"];
	$lastname=$_POST["lname"];
	$email=$_POST["email"];
	$mobile=$_POST["mobile"];
	$course=$_POST["enquiry-course"];
	$comments=$_POST["comments"];
	$enquiry=" ".$firstname." ".$lastname."having email id ".$email."and contact number - " .$mobile." is enquiring for the course ".$course." .Comments- ".$comments."";
	$to="aman.shaikh8810@gmail.com";
	mail($to, "Enquiry", $enquiry);
}

?>


<!DOCTYPE HTML>
<html>

	<head>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous">
    </script>
    <script type="text/javascript">
    	$(document).ready(function(){
    		$('.menu-toggle').click(function(){
    			$('.menu-toggle').toggleClass('active')
    			$('nav').toggleClass('active')

    		})
    	})
    </script>

	</head>
	<body >
		<div style="position:absolute; z-index:0; top:0%; left:0%">
		<img src=images/contactbackground.png id="bg" style="position:fixed; width:100%; height:100%">
	</div>
		<header>
				<a href="" class="logo">Logo</a>
				<div class="menu-toggle"></div>
				<nav>
					<ul>
						<li><a href="index.php" class="active">HOME</a></li>
						<li><a href="courses.php" class="active">COURSES</a></li>
						<li><a href="contact.php" class="active">CONTACT US</a></li>
						<li><a href="onlinePayment.php" class="active">ONLINE PAYMENT</a></li>
					</ul>
				</nav>
				<div class="clearfix"></div>
			</header>
	

	<div id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h2>Contact Information</h2>
						<div class="row">
							<div class="col-md-12">
								<div class="contact-info-wrap-flex">
									<div class="con-info">
										<p><span><i class="icon-location-2"></i></span>265 Industrial Area, <br>Saket , New Delhi</p>
									</div>
									<div class="con-info">
										<p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920">+911212121212</a></p>
									</div>
									<div class="con-info">
										<p><span><i class="icon-paperplane"></i></span> <a href="mailto:sujityadav1103@gmail.com">sujit@gmail.com</a></p>
									</div>
									<div class="con-info">
										<p><span><i class="icon-globe"></i></span> <a href="#">yourwebsite.com</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h2>Contact</h2>
						<form action="" method="POST">
							<div class="row form-group">
								<div class="col-md-6">
									<!-- <label for="fname">First Name</label> -->
									<input type="text" id="fname" name="fname" class="form-control" placeholder="Your firstname" pattern="[A-Za-z]+" required>
								</div>
								<div class="col-md-6">
									<!-- <label for="lname">Last Name</label> -->
									<input type="text" id="lname" name="lname" class="form-control" placeholder="Your lastname" pattern="[A-Za-z]+" required>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="email">Email</label> -->
									<input type="email" id="email" name="email" class="form-control" placeholder="Your email address" required>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-6">
									<!-- <label for="mobile">Mobile</label> -->
									<input type="text" id="mobile" name="mobile" class="form-control" placeholder="Your mobile number" pattern="\d*" maxlength="10" minlength="10" required>
								</div>

								<div class="col-md-6">
									<!-- <label for="course">Course</label> -->
									<!-- 
									<input type="text" id="course" name="course" class="form-control" placeholder="Course " required> -->
									<select name="enquiry-course" id="enquiry-course" class="form-control" required>
										<option>C</option>
										<option>C++</option>
										<option>Web Development</option>
										<option>Advanced PHP</option>
										<option>Java Programming</option>
										<option>Python Beginner</option>
										<option>Python Advanced</option>
										<option>.Net Asp</option>
																				
									</select>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="message">Message</label> -->
									<textarea name="comments" id="comments" cols="30" rows="10" class="form-control" placeholder="Comments" ></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" name="send" value="Send Message" 
								onclick="validate()" class="btn btn-primary">
							</div>
						</form>		
					</div>
				</div>
			</div>
		</div>
	
		
	

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

