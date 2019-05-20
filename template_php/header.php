<!DOCTYPE html>
<html>
<head>
	<title>Template</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header class="header_section"><!--header section start---->
		<div class="container-fluid">
			<div class="row">
				<div class="header_inner"><!--header inner start-->
					<div class="header col-md-12 col-sm-12 col-xs-12">
						<div class="header_left col-md-4 col-sm-4 col-xs-12">
							<img src="images/logo1.png">
						</div>
						<div class="header_right col-md-8 col-sm-8 col-xs-12">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Service</a></li>
								<li><a href="#">Information</a></li>
								<li><a href="#">Price</a></li>
							</ul>
						</div>
					</div>
				</div><!--header inner end-->
			</div>
		</div>
	</header><!--header section end-->

	<?php include_once("content.php");?>
	<?php include_once("footer.php");?>