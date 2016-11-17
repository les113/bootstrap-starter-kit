<!DOCTYPE html>
<html>
	<head>  
		<title>Title</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />	
		<?php include('inc/head.php') ?>		
    </head>
	<body>

    <!-- header -->
    <?php include('inc/header.php') ?>

    <!-- content -->
    <div id="content"> 

		<div class="container marginTop">
			<div class="row">
				<div class="slideshow col-md-12">
					<div class="cycle-slideshow" data-cycle-fx="scrollHorz">
						<div class="cycle-pager"></div>
						<img src="http://placehold.it/1170x390" alt="slide"/>
						<img src="http://placehold.it/1170x390" alt="slide"/>
						<img src="http://placehold.it/1170x390" alt="slide"/>
						<img src="http://placehold.it/1170x390" alt="slide"/>
						<img src="http://placehold.it/1170x390" alt="slide"/>
					</div>
				</div>
			</div>
		</div>

		<section>
			<div class="bgwrap">
				<div class="container">
					<div class="row featured">	
						<div class="col-md-4 col-lg-3 col-lg-offset-1">
							<div class="featuredBox">
								<div class="featuredTitle box1">
									<i class="fa fa-user"></i>
									<h2>Section</h2>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et rutrum diam. Nam faucibus laoreet viverra. Cras eget felis vitae eros congue suscipit. </p>
								<button class="btn">Learn more<i class="fa fa-caret-right"></i></button>
							</div>
						</div>
						<div class="col-md-4 col-lg-4">
							<div class="featuredBox">
								<div class="featuredTitle box2">
									<i class="fa fa-user"></i>
									<h2>Section</h2>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et rutrum diam. Nam faucibus laoreet viverra. Cras eget felis vitae eros congue suscipit. </p>
								<button class="btn">Learn more<i class="fa fa-caret-right"></i></button>
							</div>
						</div>
						<div class="col-md-4 col-lg-3">
							<div class="featuredBox">
								<div class="featuredTitle box3">
									<i class="fa fa-user"></i>
									<h2>Section</h2>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et rutrum diam. Nam faucibus laoreet viverra. Cras eget felis vitae eros congue suscipit. </p>
								<button class="btn">Learn more<i class="fa fa-caret-right"></i></button>
							</div>
						</div>			
					</div>
				</div>
			</div>
		</section>
	
		<section>
			<div class="container">
				<div class="row">	
					<div  class="col-md-5">
						<div class="circleImg"></div>
					</div>	  
					<div  class="col-md-6">
						<h2>About Me</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et rutrum diam. Nam faucibus laoreet viverra. Cras eget felis vitae eros congue suscipit. Maecenas ut fringilla nisi, malesuada aliquam urna. Etiam vehicula aliquam pretium. Etiam est lectus, maximus cursus ipsum a, semper bibendum diam.</p>
						<button class="btn">Learn more<i class="fa fa-caret-right"></i></button>
					</div> 
				</div>
			</div>
		</section>
		
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>OwlCarousel</h2>
						<div class="owl-carousel">
							<div class="">
								<a href="">
								<img src="http://placehold.it/260x180" alt=""/>
								<p class="title">Image1</p>
								</a>
							</div>
							<div>
								<a href="">
								<img src="http://placehold.it/260x180" alt=""/>
								<p class="title">Image2</p>
								</a>
							</div>
							<div>
								<a href="">
								<img src="http://placehold.it/260x180" alt=""/>
								<p class="title">Image3</p>
								</a>
							</div>
							<div>
								<a href="">
								<img src="http://placehold.it/260x180" alt=""/>
								<p class="title">Image4</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
  
    </div><!-- end page container -->   

    <!-- footer -->
    <div class="marginTop clearfix"></div>
    <?php include('inc/footer.php') ?>	
 
  </body>
</html>