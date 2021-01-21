<?php 
require_once 'supportive_php/connection.php';
?>

<?php

	
	mysqli_close($conn);
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Contact</title>
<!---css--->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/owncss.css" rel='stylesheet' type='text/css' />
<!---css--->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Real Space Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---js--->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/ownwork.js"></script>
<!---js--->
<!---fonts-->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
<!---fonts-->
<!-- pop-up -->
<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>

<!-- pop-up -->

</head>
<body>

			<div class="header-section">
				<div class="container">
					<div class="head-top">
						<div class="email">
						<ul>
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email: <a href="mailto:info@example.com">info@example.com</a> </li>
						</ul>
						</div>
						<div class="clearfix"></div>
					</div>
					<nav class="navbar navbar-default">
					<!---Brand and toggle get grouped for better mobile display--->
						<div class="navbar-header">
							<div class="navbar-brand">
								<h1><a href="index.php"><span>Meet </span>You~</a></h1>
							</div>
						</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="index.php">Home</a></li>
								<li><a href="blog.php">Activities</a></li>
								<li>
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Find The One<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="male.php">Him</a></li>
												<li><a href="female.php">Her</a></li>
											</ul>
											
								</li>
								<li class="active" ><a href="contact.php">Contact<span class="sr-only">(current)</span></a></li>
							</ul>
							<div>
						</div>
						
					</nav>
				</div>
			</div>
		<!---banner--->
		<div class="banner-section">
			<div class="container">
				<h2>Contact</h2>
				<div  align="center">
					<img src="./images/logos/logo.jpg" width="270" height="282" >
				</div>
			</div>
		</div>
		<!---banner--->
		<div class="content">
			<div class="contact-section">
				<div class="container">
					<div class="contact-grids">
						<div class="col-md-8 contact-grid">
							<h5>Fill out the form and we will get back to you within 24 hours</h5>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<div class="clearfix"></div>
							<form>
								<input id="name" type="text" value="Name " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
								<input id="wechat" type="text" value="Wechat" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="">
								<input id="phone" type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="">
								<input id="email" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="">
							<!--
								<input id="email" type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								<input id="phone" type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="">
							-->
								<textarea id="comment" type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Special Instruction/Comments...';}" required="">Special Instruction/Comments...</textarea>
								<input type="submit" onclick="Feedback()" value="Submit" >
								<p id="show"></p>
							</form>
						</div>
						<div class="col-md-4 contact-grid1">
							<h4>Hoster</h4>
							<div class="contact-top">
								<div class="agent-img">
									<img src="images/a3.jpg" class="img-responsive" alt="">
								</div>
								<div class="agent-info">
									<h5>Mandy</h5>
									<h6>Real Space Group</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<ul>
									<li><i class="glyphicon glyphicon-phone-alt" aria-hidden="true"></i> Mobile : </li>
									<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> Email : <a href="mailto:info@example.com">info@example.com</a></li>
									<li><i class="glyphicon glyphicon-cloud" aria-hidden="true"></i> Wechat : </li>
									<li><i class="glyphicon glyphicon-home" aria-hidden="true"></i> Address : </li>
									<li><i class="glyphicon glyphicon-qrcode" aria-hidden="true"></i> Barcode : </li>
									<img style="height:150px;width:200px;" src="8762.jpg" alt="">
								</ul>

						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		<!---footer--->
			<div class="footer-section">
				<div class="container">
					<div class="footer-grids">
						<div class="col-md-3 footer-grid">
							<h4>About Meet you</h4>
							<p id="aboutMeSub"></p>
						</div>
						<div class="col-md-3 footer-grid">
							<h4>Recent Posts</h4>
							<ul>
								<li><a id="postOne" href="#"></a></li>
								<li><a id="postTwo" href="#"></a></li>
								<li><a href="#" id="postThree"></a></li>
								<li><a href="#" id="postFour"></a></li>
								<li><a href="#" id="postFive"></a></li>
								<li><a href="#" id="postSix"></a></li>
							</ul>
						</div>
						<div class="col-md-3 footer-grid">
							<h4>Useful links</h4>
							<ul>
								<li><a href="terms.html">Terms of Use</a></li>
								<li><a href="privacy.html">Privacy Policy</a></li>
								<li><a href="contact.html">Contact Support </a></li>
								<li><a href="agents.html"> All Agents</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="faqs.html">FAQs</a></li>
							</ul>
						</div>
						<div class="col-md-3 footer-grid">
							<h4>Get In Touch</h4>
							<p id= "TouchOne"></p>
							<p id= "TouchTwo"></p>
							<p id= "TouchThree"></p>
							<p id= "TouchFou"><a href="#"> @mail.com</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!---footer--->
			<!--copy-->
			<div class="copy-section">
				<div class="container">
					<p id="copyright_main"></p>
				</div>
			</div>
		<!--copy-->
</body>
</html>