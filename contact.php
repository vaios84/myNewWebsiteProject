<!DOCTYPE HTML>
<!--
	vaios stergiopoulos
-->
<html>
	<head>
		<title>Optiflow by vast</title>
		<link rel='icon' href='favicon.ico' type='image/x-icon'/ >
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.html">Optiflow <span>by vast</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="manual.html">User Manual</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="about.html">About</a></li>
				</ul>
			</nav>

		<!-- Main -->
			<div id="main">
				
				<!-- A Scroll To Top Button -->
				<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> 
				

				<!-- Section -->
				<section class="wrapper">
					<div class="inner">
					
						<header class="align-center">
							<h1>Contact us</h1>
							
						</header>
						
						
				<!-- Box -->
					<h3>Drop a line</h3>
					<div class="box">
						<p>We always look forward to hearing from you. Feel free to drop a message for the <em>Optiflow Team.</em> We value communication really a lot.<br>
						Are you an Optiflow user? Are you interested to become one? Or, maybe are you thinking to be a partner and a reseller for Optiflow project?<br>
						Whatever the case, we'd love to hear from you. 
						</p>
						<h4>You can reach our team using the form below or, at this email: <span><a href="mailto:software.vast@gmail.com">software.vast@gmail.com</a></span> </h4>
					</div>

									
									<hr>
						
									<!-- Form -->
										<h3>Form</h3>
										

										<form method="post" action="mail.php" enctype="multipart/form-data" onsubmit="return validateContactForm()">
											<div class="row uniform">
												<div class="6u 12u$(xsmall)" id="userName-info">
													<input type="text" name="name" id="name" value="" placeholder="Name" />
												</div>
												<div class="6u$ 12u$(xsmall)" id="userEmail-info">
													<input type="email" name="email" id="email" value="" placeholder="Email" />
												</div>
												<!-- Break -->
												<div class="12u$" id="subject-info">
													<div class="select-wrapper">
														<select name="category" id="category">
															<option value="">- Category -</option>
															<option value="1">Current user</option>
															<option value="1">Interested to become a user</option>
															<option value="1">Partner-Reseller</option>
															<option value="1">Other</option>
														</select>
													</div>
												</div>
												
												<div class="6u$ 12u$(small)" id="human-info">
													<input type="checkbox" id="human" name="human" >
													<label for="human">I am not a robot</label><br>
													<p id="textCheckButton" style="display:none">Please check!</p>
												</div>
												<!-- Break -->
												<div class="12u$" id="userMessage-info">
													<textarea name="message" id="message" placeholder="Enter your message" cols="60" rows="6"></textarea>
												</div>
												<!-- Break -->
												<div class="12u$">
													<ul class="actions">
														<li><input type="submit" name="submit" value="Send Message" /></li>
														<li><input type="reset" value="Reset" class="alt" onClick="window.location.reload();" /></li>
													</ul>
												</div>
											</div>
										</form>

										<hr>

										
									<!-- Section -->
									<section class="wrapper style2">
										<div class="inner">
											<div class="flex flex-2">
												<div class="col col2">
													<h3><em>Whatever is the case, we'd love to hear from you...</em></h3>
													<h4><em>The Optiflow Team</em></h4>
												</div>
												<div class="col col1 first">
													<div class="image round fit">
														<img src="images/pic15.jpg" alt="" />
													</div>
												</div>
											</div>
										</div>
									</section>
										


							</div>
						
				</section>
			</div>

		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>
					<p>&copy; VAST. All rights reserved. Design: <a href="#">VAST</a>. Images: <a href="https://unsplash.com" target="_blank">Unsplash</a>.</p>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/scrolltopbutton.js"></script>
			
			<script type="text/javascript">
				function validateContactForm() {
						var valid = true;

						var userName = $("#name").val();
						var userEmail = $("#email").val();
											
						var ishuman = document.getElementById("human");
						var text = document.getElementById("textCheckButton");
						
						var content = $("#message").val();
						
						if (userName == "") {
							$("#userName-info").html("Name required.");
							$("#name").css('border', '#e66262 1px solid');
							valid = false;
						}
						if (userEmail == "") {
							$("#userEmail-info").html("Email required.");
							$("#email").css('border', '#e66262 1px solid');
							valid = false;
						}
						if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
						{
							$("#userEmail-info").html("Invalid Email Address.");
							$("#email").css('border', '#e66262 1px solid');
							valid = false;
						}
						
						if (ishuman.checked != true) {
							textCheckButton.style.display = "block";
							valid = false;
						}
						
						
						if (content == "") {
							$("#userMessage-info").html("Message required.");
							$("#message").css('border', '#e66262 1px solid');
							valid = false;
						}
						return valid;	
				}
			</script>

	</body>
</html>
