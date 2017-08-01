<!--A Design by MD. Omar Faruk
Author: MD. Omar Faruk
Author URL:

-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Roktodan.com</title>
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<!-- start plugins -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
		<!----font-Awesome----->
		<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
		
		<!----Custom CSS----->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/rotating-card.css">
	</head>
	<body>
		
		<div class="header_bg">
			<div class="container">
				<div class="row header">
					<div class="logo navbar-left">
						<h1><span><img src="images/logo.jpg" alt="logo" class="img-rounded" id="logo-img"></span><a href="index.php">Roktodan </a></h1>
					</div>
				
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row h_menu">
				<nav class="navbar navbar-default  navbar-left" role="navigation">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					  <ul class="nav navbar-nav">
						<li class="active"><a href="../index.php">Home</a></li>
						<li ><a href="#">Blood Donors</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Blogs</a></li>
						<li><a href="#">Contact</a></li>
					  </ul>
					</div><!-- /.navbar-collapse -->
					<!-- start soc_icons -->
				</nav>
				<div class="soc_icons navbar-right">
					<ul class="list-unstyled text-center">
						<li><a href="#">Join</a></li>
						<li><a href="#">Log In</a></li>
						<li><a href="#" id="facebook"><i class="fa fa-facebook"></i></a></li>
			
					</ul>	
				</div>
			</div>
		</div>
		<!-- start search -->
		<div class="container">
			<div class="row search">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="form-group">
							
							<select name="group" class="form-control">
							 
								<option value="" > Blood Group <i class="fa fa-caret-down"></option>
								<option value="1" > AB+ (Positive)</option>
								<option value="2"> AB- (Negative) </option>
								<option value="3"> A+ (Positive)</option>
								<option value="4"> A- (Negative) </option>
								<option value="5"> B+ (Positive)</option>
								<option value="6"> B- (Negative)</option>
								<option value="7"> O+ (Positive)</option>
								<option value="8"> O- (Negative)</option>
								
								
							 
							</select>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="form-group">
							
							<select name="location" class="form-control">
							 
								<option value=""> Location</option>
								<option value=""> Dhaka</option>
								<option value=""> Khulna</option>
								<option value=""> Rajshahi</option>
								<option value=""> Chitagong</option>
								<option value=""> Rangpur</option>
								<option value=""> Barisal</option>
							</select>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="form-group">
							<button type="submit" name="search" class="btn btn-danger form-control"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;&nbsp;Search</button>
						</div>	
					</div>
					
				</div>
				
			</div>
		
		</div>
		
		<!-- start users -->
		<div class="container">
			<div class="row user">
				<h4 class="text-center"><b>Recently Joined Blood Donors</b></h4>
				<div class="col-md-12">
					<div class="col-md-3 col-sm-4 col-xs-12">
						<div class="card-container manual-flip">
							<div class="card">
								<div class="front">
									<div class="cover">
										<img src="images/cover2.png"/>
									</div>
									<div class="user">
										<img class="img-circle" src="images/user.jpg"/>
									</div>
									<div class="content">
										<div class="main">
											<h3 class="name">MD. Omar Faruk</h3>
											<p class="group">AB+ (positive)</p>
											<p class="general">Gender: Male</p>
											<p class="group">Last Donate: 17 Aug 2016</p>
										</div>
										<div class="footer">
											<button class="btn btn-simple" onclick="rotateCard(this)">
												<i class="fa fa-mail-forward"></i> Details
											</button>
										</div>
									</div>
								</div> <!-- end front panel -->
								<div class="back">
									<div class="header">
										<h5 class="motto">"Here's My Details Info.."</h5>
									</div>
									<div class="content">
										<div class="main">
											<p class="text-center mobile">Mobile : 01611425480</p>
											<p class="text-center details">Email Address: roktodan@roktodan.com</p>
											<p class="text-center details">Location : Dhaka</p>
											<p class="text-center details">Age : 27 Years</p>
										</div>
									</div>
									<div class="footer text-center" style="margin-top:50px">
									   
										
									 <button class="btn btn-simple"  onclick="rotateCard(this)"><i class="fa fa-reply"></i> Back
									 </button>
									
									</div>
								</div> <!-- end back panel -->
							</div> <!-- end card -->
						</div> <!-- end card-container -->
					</div> <!-- end col md 3 -->
					<div class="col-md-3 col-sm-4 col-xs-12">
						<div class="card-container manual-flip">
							<div class="card">
								<div class="front">
									<div class="cover">
										<img src="images/cover2.png"/>
									</div>
									<div class="user">
										<img class="img-circle" src="images/user.jpg"/>
									</div>
									<div class="content">
										<div class="main">
											<h3 class="name">MD. Omar Faruk</h3>
											<p class="group">AB+ (positive)</p>
											<p class="general">Gender: Male</p>
											<p class="group">Last Donate: 17 Aug 2016</p>
										</div>
										<div class="footer">
											<button class="btn btn-simple" onclick="rotateCard(this)">
												<i class="fa fa-mail-forward"></i> Details
											</button>
										</div>
									</div>
								</div> <!-- end front panel -->
								<div class="back">
									<div class="header">
										<h5 class="motto">"Here's My Details Info.."</h5>
									</div>
									<div class="content">
										<div class="main">
											<p class="text-center mobile">Mobile : 01611425480</p>
											<p class="text-center details">Email : roktodan@roktodan.com</p>
											<p class="text-center details">Location : Dhaka</p>
											<p class="text-center details">Age : 27 Years</p>
										</div>
									</div>
									<div class="footer text-center" style="margin-top:50px">
									   
										
									 <button class="btn btn-simple"  onclick="rotateCard(this)"><i class="fa fa-reply"></i> Back
									 </button>
									
									</div>
								</div> <!-- end back panel -->
							</div> <!-- end card -->
						</div> <!-- end card-container -->
					</div> <!-- end col md 3 -->
					<div class="col-md-3 col-sm-4 col-xs-12">
						<div class="card-container manual-flip">
							<div class="card">
								<div class="front">
									<div class="cover">
										<img src="images/cover2.png"/>
									</div>
									<div class="user">
										<img class="img-circle" src="images/user.jpg"/>
									</div>
									<div class="content">
										<div class="main">
											<h3 class="name">MD. Omar Faruk</h3>
											<p class="group">AB+ (positive)</p>
											<p class="general">Gender: Male</p>
											<p class="group">Last Donate: 17 Aug 2016</p>
										</div>
										<div class="footer">
											<button class="btn btn-simple" onclick="rotateCard(this)">
												<i class="fa fa-mail-forward"></i> Details
											</button>
										</div>
									</div>
								</div> <!-- end front panel -->
								<div class="back">
									<div class="header">
										<h5 class="motto">"Here's My Details Info.."</h5>
									</div>
									<div class="content">
										<div class="main">
											<p class="text-center mobile">Mobile : 01611425480</p>
											<p class="text-center details">Email : roktodan@roktodan.com</p>
											<p class="text-center details">Location : Dhaka</p>
											<p class="text-center details">Age : 27 Years</p>
										</div>
									</div>
									<div class="footer text-center" style="margin-top:50px">
									   
										
									 <button class="btn btn-simple"  onclick="rotateCard(this)"><i class="fa fa-reply"></i> Back
									 </button>
									
									</div>
								</div> <!-- end back panel -->
							</div> <!-- end card -->
						</div> <!-- end card-container -->
					</div> <!-- end col md 3 -->
					<div class="col-md-3 col-sm-4 col-xs-12">
						<div class="card-container manual-flip">
							<div class="card">
								<div class="front">
									<div class="cover">
										<img src="images/cover2.png"/>
									</div>
									<div class="user">
										<img class="img-circle" src="images/user.jpg"/>
									</div>
									<div class="content">
										<div class="main">
											<h3 class="name">MD. Omar Faruk</h3>
											<p class="group">AB+ (positive)</p>
											<p class="general">Gender: Male</p>
											<p class="group">Last Donate: 17 Aug 2016</p>
										</div>
										<div class="footer">
											<button class="btn btn-simple" onclick="rotateCard(this)">
												<i class="fa fa-mail-forward"></i> Details
											</button>
										</div>
									</div>
								</div> <!-- end front panel -->
								<div class="back">
									<div class="header">
										<h5 class="motto">"Here's My Details Info.."</h5>
									</div>
									<div class="content">
										<div class="main">
											<p class="text-center mobile">Mobile : 01611425480</p>
											<p class="text-center details">Email : roktodan@roktodan.com</p>
											<p class="text-center details">Location : Dhaka</p>
											<p class="text-center details">Age : 27 Years</p>
										</div>
									</div>
									<div class="footer text-center" style="margin-top:50px">
									   
										
									 <button class="btn btn-simple"  onclick="rotateCard(this)"><i class="fa fa-reply"></i> Back
									 </button>
									
									</div>
								</div> <!-- end back panel -->
							</div> <!-- end card -->
						</div> <!-- end card-container -->
					</div> <!-- end col md 3 -->
				</div>
				
			</div>
		
		</div>
		<div class="container">
			<div class="row dot">
			
			</div>
		</div>
		<!-- start users -->
		<div class="container">
			<div class="row team">
				<h4 class="text-center"><b>Meet Our Team Members</b></h4>
				<div class="col-md-12">
					<div class="col-md-3 col-sm-4 col-xs-12">
						<div class="card-container">
							<div class="card">
								<div class="front">
									<div class="cover">
										<img src="images/cover3.png"/>
									</div>
									<div class="user">
										<img class="img-circle" src="images/admin3.jpg"/>
									</div>
									<div class="content">
										<div class="main">
											<h3 class="name">MD. Omar Faruk</h3>
											<p class="profession">Founder</p>
											<p class="text-center">"I'm founder I'm founder I'm founder I'm founder I'm founder I'm founder "</p>
										</div>
										<div class="footer">
											<i class="fa fa-mail-forward"></i> Auto Rotation
										</div>
									</div>
								</div> <!-- end front panel -->
								<div class="back">
									<div class="header">
										<h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
									</div>
									<div class="content">
										<div class="main" id="back_main">
											<p class="text-center mobile">Mobile : 01611425480</p>
											<p class="text-center details">Email : roktodan@roktodan.com</p>
											<p class="text-center details">Location : Dhaka</p>
											<p class="text-center details">Age : 27 Years</p>
											
										</div>
									</div>
									<div class="footer" >
										<div class="social-links text-center">
											<a href="#" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
											<a href="#" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
											<a href="#" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
										</div>
									</div>
								</div> <!-- end back panel -->
							</div> <!-- end card -->
						</div> <!-- end card-container -->
					</div> <!-- end col sm 3 -->
					<div class="col-md-3 col-sm-4 col-xs-12">
						<div class="card-container">
							<div class="card">
								<div class="front">
									<div class="cover">
										<img src="images/cover3.png"/>
									</div>
									<div class="user">
										<img class="img-circle" src="images/admin3.jpg"/>
									</div>
									<div class="content">
										<div class="main">
											<h3 class="name">MD. Omar Faruk</h3>
											<p class="profession">Founder</p>
											<p class="text-center">"I'm founder I'm founder I'm founder I'm founder I'm founder I'm founder "</p>
										</div>
										<div class="footer">
											<i class="fa fa-mail-forward"></i> Auto Rotation
										</div>
									</div>
								</div> <!-- end front panel -->
								<div class="back">
									<div class="header">
										<h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
									</div>
									<div class="content">
										<div class="main" id="back_main">
											<p class="text-center mobile">Mobile : 01611425480</p>
											<p class="text-center details">Email : roktodan@roktodan.com</p>
											<p class="text-center details">Location : Dhaka</p>
											<p class="text-center details">Age : 27 Years</p>
											
										</div>
									</div>
									<div class="footer">
										<div class="social-links text-center">
											<a href="#" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
											<a href="#" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
											<a href="#" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
										</div>
									</div>
								</div> <!-- end back panel -->
							</div> <!-- end card -->
						</div> <!-- end card-container -->
					</div> <!-- end col sm 3 -->
					<div class="col-md-3 col-sm-4 col-xs-12">
						<div class="card-container">
							<div class="card">
								<div class="front">
									<div class="cover">
										<img src="images/cover3.png"/>
									</div>
									<div class="user">
										<img class="img-circle" src="images/admin3.jpg"/>
									</div>
									<div class="content">
										<div class="main">
											<h3 class="name">MD. Omar Faruk</h3>
											<p class="profession">Founder</p>
											<p class="text-center">"I'm founder I'm founder I'm founder I'm founder I'm founder I'm founder "</p>
										</div>
										<div class="footer">
											<i class="fa fa-mail-forward"></i> Auto Rotation
										</div>
									</div>
								</div> <!-- end front panel -->
								<div class="back">
									<div class="header">
										<h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
									</div>
									<div class="content">
										<div class="main" id="back_main">
											<p class="text-center mobile">Mobile : 01611425480</p>
											<p class="text-center details">Email : roktodan@roktodan.com</p>
											<p class="text-center details">Location : Dhaka</p>
											<p class="text-center details">Age : 27 Years</p>
											
										</div>
									</div>
									<div class="footer">
										<div class="social-links text-center">
											<a href="#" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
											<a href="#" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
											<a href="#" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
										</div>
									</div>
								</div> <!-- end back panel -->
							</div> <!-- end card -->
						</div> <!-- end card-container -->
					</div> <!-- end col sm 3 -->
					<div class="col-md-3 col-sm-4 col-xs-12">
						<div class="card-container">
							<div class="card">
								<div class="front">
									<div class="cover">
										<img src="images/cover3.png"/>
									</div>
									<div class="user">
										<img class="img-circle" src="images/admin3.jpg"/>
									</div>
									<div class="content">
										<div class="main">
											<h3 class="name">MD. Omar Faruk</h3>
											<p class="profession">Founder</p>
											<p class="text-center">"I'm founder I'm founder I'm founder I'm founder I'm founder I'm founder "</p>
										</div>
										<div class="footer">
											<i class="fa fa-mail-forward"></i> Auto Rotation
										</div>
									</div>
								</div> <!-- end front panel -->
								<div class="back">
									<div class="header">
										<h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
									</div>
									<div class="content">
										<div class="main" id="back_main">
											<p class="text-center mobile">Mobile : 01611425480</p>
											<p class="text-center details">Email : roktodan@roktodan.com</p>
											<p class="text-center details">Location : Dhaka</p>
											<p class="text-center details">Age : 27 Years</p>
											
										</div>
									</div>
									<div class="footer">
										<div class="social-links text-center">
											<a href="#" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
											<a href="#" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
											<a href="#" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
										</div>
									</div>
								</div> <!-- end back panel -->
							</div> <!-- end card -->
						</div> <!-- end card-container -->
					</div> <!-- end col sm 3 -->
				
				</div>
			</div>
		
		</div>
		
		<!-- start footer -->
		<div class="container">
			<div class="row  main-footer">
				<div class="copy text-center">
					<p class="link"><span>&#169; All rights reserved by&nbsp;<a href="#"> Roktodan.com</a></span></p>
				</div>
			</div>
		</div>
		
		<script type="text/javascript">
			$().ready(function(){
				$('[rel="tooltip"]').tooltip();

			});

			function rotateCard(btn){
				var $card = $(btn).closest('.card-container');
				console.log($card);
				if($card.hasClass('hover')){
					$card.removeClass('hover');
				} else {
					$card.addClass('hover');
				}
			}
		</script>
	
	</body>
</html>