<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edmin</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html">
			  		Edmin
			  	</a>

				

					<form class="navbar-search pull-left input-append" action="#">
						<input type="text" class="span3">
						<button class="btn" type="button">
							<i class="icon-search"></i>
						</button>
					</form>
				
					
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->


   
					
						

					
					</div><!--/.sidebar-->
				</div><!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
                                <h2>Welcome to <?php echo $_SESSION["subject"];?></h2>
								<h3>Teacher workspace</h3>
							</div>
							<div class="module-body">
								<div class="stream-composer media">
									
								<div class="media-body">
                                        <span>Title</span>
									<form  method="post" action="../controller/contents.php">
                                        <div class="row-fluid" >

											<textarea class="span12" name="title" style="height: 20px; resize: none;"></textarea>
                                        </div>
                                        
										<div class="row-fluid" >
                                        <span>Content</span>
											<textarea class="span12" name="content" style="height: 70px; resize: none;"></textarea>
                                         </div>
										<div class="clearfix">
											<input type="submit" value="submit" name="submit" class="btn btn-primary pull-right">
											<a href="#" class="btn btn-small" rel="tooltip" data-placement="top" data-original-title="Upload a photo">
												<i class="icon-camera shaded"></i>
											</a>
											<a href="#" class="btn btn-small" rel="tooltip" data-placement="top" data-original-title="Upload a video">
												<i class="icon-facetime-video shaded"></i>
											</a>
											<a href="#" class="btn btn-small" rel="tooltip" data-placement="top" data-original-title="Pin your location">
												<i class="icon-map-marker shaded"></i>
											</a>	
                                          
											
										</div>
                                     </form>
                                 </div>
								</div>

								

	
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>