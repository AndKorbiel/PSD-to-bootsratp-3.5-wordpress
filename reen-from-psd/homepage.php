<?php 
/* Template Name: Homepage 
 * The home page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Reen-from-PSD
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div id="baner-section">
	
		<div class="container">
		
			<div class="row">
			
				<div class="col">
					
						<h1>Made for Designers</h1>
						<h2>Create your online portfolio in minutes with the professionally and lovingly designed REEN<br /> website template. Customize your site with versatile and easy to use features.</h2>
						<button>Get started now</button>

				</div>
				
			</div>
		
		</div>
		
	</div>

	<div id="content-section">

		<div class="container">
			
			<div class="row justify-content-md-center">
				
					<div class="col-lg-8">
						<h2>Beautiful. Clean. Responsive.</h2>
						<h4>REEN is a high-quality solution for those who want a beautiful website in no time. It's fully responsive and will adapt itself to any mobile device. iPad, iPhone, Android, it doesn't matter. Your content will always looks its absolute best.</h4>
					</div>

			</div>

			<div class="row offer">
				
					<div class="col-lg-4">
						
							<div class="colleft">
								<i class="far fa-heart"></i>
							</div>
							<div class="colright">
								<h3>Passion</h3>
								<p>Magnis modipsae que lib voloratati andigen daepeditem quiate re porem aut labor. Laceaque quiae sitiorem rest non restibusaes maio es dem tumquam core posae volor remped modis volor.</p>
							</div>


					</div>	
					<div class="col-lg-4">
						
							<div class="colleft">
								<i class="far fa-lightbulb"></i>
							</div>
							<div class="colright">
								<h3>Creativity</h3>
								<p>Magnis modipsae que lib voloratati andigen daepeditem quiate re porem aut labor. Laceaque quiae sitiorem rest non restibusaes maio es dem tumquam core posae volor remped modis volor.</p>
							</div>	

					</div>
					<div class="col-lg-4">

							<div class="colleft">
								<i class="far fa-star"></i>
							</div>
							<div class="colright">
								<h3>Quality</h3>
								<p>Magnis modipsae que lib voloratati andigen daepeditem quiate re porem aut labor. Laceaque quiae sitiorem rest non restibusaes maio es dem tumquam core posae volor remped modis volor.</p>
							</div>	

					</div>

			</div>

			<div class="row justify-content-md-center big-two">
				
					<div class="col-lg-8">
						<h2>Check out our latest works</h2>
						<h4>Magnis modipsae que voloratati andigen daepeditem quiate re porem aut labor.</h4>
					</div>

					<div class="col-sm-12 col-lg-6">
						<img src="<?php echo get_template_directory_uri(); ?>/img/image1.jpg">
						<figcaption>Grand Motel gets an identity brushup <br /><span>Identity</span></figcaption>
					</div>

					<div class="col-sm-12 col-lg-6">
						<img src="<?php echo get_template_directory_uri(); ?>/img/image2.jpg">
						<figcaption>Fresh branding for a creative startup<br /><span>Identity</span></figcaption>
					</div>

			</div>

			<div class="row justify-content-md-center slider">

				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					  </ol>
					  <div class="carousel-inner">

					    <div class="carousel-item active">

					    	<div class="container">
						    	<div class="row">
							    	<div class="col">
							     		 <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/image2.jpg" alt="First slide">
							  		</div>
							  		<div class="col">
							     		 <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/image1.jpg" alt="First slide">
							  		</div>
							  		<div class="col">
							     		 <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/image2.jpg" alt="First slide">
							  		</div>
							  		<div class="col">
							     		 <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/image1.jpg" alt="First slide">
							  		</div>
						  		</div>
					  		</div>
					  
					    </div>

					    <div class="carousel-item">

					    	<div class="container">
						    	<div class="row">
							    	<div class="col">
							     		 <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/image2.jpg" alt="First slide">
							  		</div>
							  		<div class="col">
							     		 <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/image1.jpg" alt="First slide">
							  		</div>
							  		<div class="col">
							     		 <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/image2.jpg" alt="First slide">
							  		</div>
							  		<div class="col">
							     		 <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/image1.jpg" alt="First slide">
							  		</div>
						  		</div>
					  		</div>
					  
					    </div>

					    <div class="carousel-item">

					    	<div class="container">
						    	<div class="row">
							    	<div class="col">
							     		 <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/image2.jpg" alt="First slide">
							  		</div>
							  		<div class="col">
							     		 <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/image1.jpg" alt="First slide">
							  		</div>
							  		<div class="col">
							     		 <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/image2.jpg" alt="First slide">
							  		</div>
							  		<div class="col">
							     		 <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/image1.jpg" alt="First slide">
							  		</div>
						  		</div>
					  		</div>
					  
					    </div>
					    
					  </div>
					 
				</div>

			</div>

			<div class="row justify-content-md-center">
				
					<div class="col-lg-8 job">
						<h2>Want to work with us?</h2>
						<h4>Magnis modipsae que voloratati andigen daepeditem quiate re porem aut labor. Laceaque quiae sitiorem rest non restibusaes maio es dem tumquam.</h4>
						<button>Get in touch</button>
					</div>

			</div>

		</div>

	</div>
	
</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
