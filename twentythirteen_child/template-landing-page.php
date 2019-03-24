<?php 
/*
 * Template name: Landing Page
 */
get_header();?>

	<section class="description">
		<div class="text">At DataRobot, having machine learning in production is what our product is about. Hundreds of high-profile organizations across the world use our models every day and base their business operations on them.</div>
	</section>
	<section class="program">
		<div class="title">Why you will benefit from the program</div>
		<div class="blocks-container">
			<div class="block">
				<div class="img"><img src="<?php echo get_stylesheet_directory_uri()?>/img/industry.png" alt="Machine Learning" /></div>
				<div class="text">We know how to operationalize Machine Learning in the real world and ready to share this knowledge with you</div>
			</div>
			<div class="block">
				<div class="img"><img src="<?php echo get_stylesheet_directory_uri()?>/img/people.png" alt="Superstar team" /></div>
				<div class="text">We have a superstar team of Kaggle champions, ML library authors, and business-savvy scientists to help you learn and succeed</div>
			</div>
			<div class="block">
				<div class="img"><img src="<?php echo get_stylesheet_directory_uri()?>/img/laptop.png" alt="Tasks" /></div>
				<div class="text">You will join us as a DataRobot employee and work on the tasks directly related to the evolution of the product</div>
			</div>
			<div class="block">
				<div class="img"><img src="<?php echo get_stylesheet_directory_uri()?>/img/analytics.png" alt="Art ML models" /></div>
				<div class="text">You will enjoy all the productivity boosts offered by Machine Learning automation and state of the art ML models</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>