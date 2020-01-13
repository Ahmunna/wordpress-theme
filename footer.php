<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clubAa
 */

 //Section contacts
 $adresse_postale = get_field('adresse_postale','12');
 $telephone = get_field("telephone",'12');
 $adresse_mail = get_field("adresse_mail",'12');
?>

	</div><!-- #content -->
	<footer class=" bg-dark">
	<div class="container-fluid d-flex justify-content-around text-white p-3">
		<div class="d-flex flex-column justify-content-center">
			<div class="mt-2 mb-2 d-flex text- align-items-center">
				<img src="wp-content\themes\clubaa\img\gps.png" alt="" class="max-width inline-block" />
				<h6><?php echo $adresse_postale;?></h6>
			</div>
			<div class="mt-2 mb-2 d-flex text- align-items-center">
				<img src="wp-content\themes\clubaa\img\gps.png" alt="" class="max-width inline-block" />
				<h6><?php  echo $telephone ;?></h6>
			</div>
			<div class="mt-2 mb-2 d-flex text- align-items-center">
				<img src="wp-content\themes\clubaa\img\gps.png" alt="" class="max-width inline-block" />
				<h6><?php echo $adresse_mail;?></h6>
			</div>
		</div>
		<div class="d-flex flex-column align-items-center pt-4">
			<div>
			Suivez-nous sur les résaux sociaux
			</div>
			<div> 
				<img src="wp-content\themes\clubaa\img\gps.png" alt="" class="max-width inline-block" />
				<img src="wp-content\themes\clubaa\img\gps.png" alt="" class="max-width inline-block" />
				<img src="wp-content\themes\clubaa\img\gps.png" alt="" class="max-width inline-block" />
			</div>
		</div>
	</div>
	<h4 class="text-center text-white p-2" style="margin : 0;">&copy; Copyright 2020, Club Plongée de l'AA. Tous droits réservés</h4>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
