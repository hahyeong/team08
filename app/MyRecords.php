<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="css/tiny-slider.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/style.css">

	<script src="js/includeHTML.js"></script>
	<title>Property &mdash; Free Bootstrap 5 Website Template by Untree.co</title>
</head>
<body>
	<div include-html="html/nav.html"></div>
    <script>
      includeHTML();
    </script>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<div class="hero page-inner overlay" style="background-image: url('images/hero_bg_1.jpg');">

		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center mt-5">
					<h1 class="heading" data-aos="fade-up">나의 산행기록</h1>

					<nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
						<ol class="breadcrumb text-center justify-content-center">
							<li class="breadcrumb-item "><a href="MyRecords.php">나의 산행기록</a></li>
							<li class="breadcrumb-item "><a href="AddRecords.php">산행기록 적기</a></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<div class="section section-properties">
		<div class="container">
		<div class="row">
			<?php
				$db_host="localhost";
				$db_user="team08";
				$db_password="team08";
				$db_name="team08";

				//connect to the database
				$link=mysqli_connect($db_host,$db_user,$db_password,$db_name);
				
				//check connection
				if($link===false){
					die("error: could not connect".mysqli_connect_error());
				}else{
					//prepare an insert statement
					//$sql="INSERT INTO `team08`.`mtn_review`(`review_id`,`mtn_idx`,`mtn_name`,`user_id`,`visit_date`,`mtn_rate`,`comment`,`created`) VALUES (?,?,?,?,?,?,?,?)";
					//$sql="INSERT INTO `team08`.`mtn_review`(`mtn_idx`,`mtn_name`,`user_id`,`visit_date`,`mtn_rate`,`comment`,`created`) VALUES (?,?,?,?,?,?,?)";
					$sql="select * from `team08`.`mtn_review`";
					$res=mysqli_query($link,$sql);
					
					if($res){			
						if($res){
							while($newArray=mysqli_fetch_array($res,MYSQLI_ASSOC)){
								$mtn_idx=$newArray['mtn_idx'];
								$mtn_name=$newArray['mtn_name'];
								$user_id=$newArray['user_id'];
								$visit_date=$newArray['visit_date'];
								$mtn_rate=$newArray['mtn_rate'];
								$comment=$newArray['comment'];
								$created=$newArray['created'];

							echo '
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
							<div class="property-item mb-30">
		
								<a href="property-single.html" class="img">
									<img src="images/img_1.jpg" alt="Image" class="img-fluid">
								</a>
		
								<div class="property-content">
									<div class="price mb-2"><span>'.$mtn_name.'</span></div>
									<div>		
										<span class="d-block mb-2 text-black-50">'.$visit_date.'</span>
										<span class="city d-block mb-3">'.$comment.'</span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-map-marker"></span>
												<span class="caption">'.$created.'</span>
											</span>
										</div>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center">
												<span class="icon-star"></span>
												<span class="caption">'.$mtn_rate.'</span>
											</span>
										</div>
		
										
										<form action="" method="post">
											<input type="submit" value="기록 삭제하기" class="btn btn-primary">
										</form>
									</div>
								</div>
							</div> <!-- .item -->
						</div>
							';
						}
					}else{
						echo "ERROR: Could not retrieve records: $sql".mysqli_error($link);
					}
				}
			}
				//close statement
				mysqli_free_result($res);
				//close connection
				mysqli_close($link);
			?>
			</div>
		</div>
			<div class="row align-items-center py-5">
				<div class="col-lg-3">
					Pagination (1 of 10)
				</div>
				<div class="col-lg-6 text-center">
					<div class="custom-pagination">
						<a href="#">1</a>
						<a href="#" class="active">2</a>
						<a href="#">3</a>
						<a href="#">4</a>
						<a href="#">5</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="site-footer">
		<div class="container">

			<div class="row">
				<div class="col-lg-4">
					<div class="widget">
						<h3>Contact</h3>
						<address>43 Raymouth Rd. Baltemoer, London 3910</address>
						<ul class="list-unstyled links">
							<li><a href="tel://11234567890">+1(123)-456-7890</a></li>
							<li><a href="tel://11234567890">+1(123)-456-7890</a></li>
							<li><a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<div class="widget">
						<h3>Sources</h3>
						<ul class="list-unstyled float-start links">
							<li><a href="#">About us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Vision</a></li>
							<li><a href="#">Mission</a></li>
							<li><a href="#">Terms</a></li>
							<li><a href="#">Privacy</a></li>
						</ul>
						<ul class="list-unstyled float-start links">
							<li><a href="#">Partners</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Creative</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<div class="widget">
						<h3>Links</h3>
						<ul class="list-unstyled links">
							<li><a href="#">Our Vision</a></li>
							<li><a href="#">About us</a></li>
							<li><a href="#">Contact us</a></li>
						</ul>

						<ul class="list-unstyled social">
							<li><a href="#"><span class="icon-instagram"></span></a></li>
							<li><a href="#"><span class="icon-twitter"></span></a></li>
							<li><a href="#"><span class="icon-facebook"></span></a></li>
							<li><a href="#"><span class="icon-linkedin"></span></a></li>
							<li><a href="#"><span class="icon-pinterest"></span></a></li>
							<li><a href="#"><span class="icon-dribbble"></span></a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
			</div> <!-- /.row -->

			<div class="row mt-5">
				<div class="col-12 text-center">
					<!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> <!-- License information: https://untree.co/license/ -->
            </p>

          </div>
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.site-footer -->


    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
    	<div class="spinner-border" role="status">
    		<span class="visually-hidden">Loading...</span>
    	</div>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
	<script defer>
       includeHTML();
     </script>
  </body>
  </html>