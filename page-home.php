<?php
/*
    Template Name: Home Page
 */

get_header();

//Advanced Custom Fields
//Banner image
$titre_banniere = get_field('titre_banniere');
$description_banniere = get_field('description_banniere');

//Section Reseaux sociaux

$lien_facebook = get_field("lien_facebook");
$lien_instagram = get_field('lien_instagram');
$lien_youtube = get_field("lien_youtube");
//Section nos activites
$description_activite = get_field('description_activite');
$photo_activite_1 = get_field('photo_activite_1');
$titre_activite_1 = get_field('titre_activite_1');
$description_activite_1 = get_field('description_activite_1');
$photo_activite_2 = get_field('photo_activite_2');
$titre_activite_2 = get_field('titre_activite_2');
$description_activite_2 = get_field('description_activite_2');
$photo_activite_3 = get_field('photo_activite_3');
$titre_activite_3 = get_field('titre_activite_3');
$description_activite_3 = get_field('description_activite_3');

//Section a propos de nous
$propos_image = get_field('propos_image');
$propos_description = get_field('propos_description');

//Section Notre équipe
$membres = new WP_Query( array('post_type' => 'membres', 'orderby' =>'post_id' , 'order' => 'ASC'));
$partenaires = new WP_Query( array('post_type' => 'partenaires', 'orderby' =>'post_id' , 'order' => 'ASC'));


?>

<!--Banner image and social media -->
<div>
    <div class=" container-fluid banner-image text-center">
        <div class="row h-100">
            <div class="col-sm-12 my-auto text-white">
                <h1><?php echo $titre_banniere ; ?></h1>
                <p><?php echo $description_banniere ; ?></p>
            </div>
        </div>
    </div>
    <!-- A rendre dynamique -->
    <div class=" container d-flex justify-content-around bg-white p-3">
        <a href="<?php echo $lien_facebook; ?>"><img src="<?php echo get_template_directory_uri();?>/img/facebook.png" alt="logo"  class="max-width" /></a>
        <a href="<?php echo $lien_instagram; ?>"><img src="<?php echo get_template_directory_uri();?>/img/instagram.png" alt="logo"  class="max-width" /></a>
        <a href="<?php echo $lien_youtube;?>"><img src="<?php echo get_template_directory_uri();?>/img/youtube.png" alt="logo"  class="max-width" /></a>
    </div>
</div>


<!--Activities Section-->
<div class="container-fluid p-5 text-center mb-5 bg-light">
    <h2 class="p-4">Nos activités</h2>
    <p><?php echo $description_activite; ?></p>
    <div class="d-flex justify-content-center align-items-center flex-wrap">
        <div class="card bg-white m-4 on-hover" style="max-width: 20rem;">
        <img src="<?php echo $photo_activite_1['url']?>" class="rounded mx-auto w-25 m-4 d-block"  alt="<?php echo $photo_activite_1['alt']; ?>">
            <div class="card-body ">
                <h5 class="card-title m-4"><?php echo $titre_activite_1; ?></h5>
                <p class="card-text m-3"><?php echo $description_activite_1 ; ?></p>
            </div>
        </div>
        <div class="card bg-white m-4 on-hover" style="max-width: 20rem;">
            <img src="<?php echo $photo_activite_2['url']?>" class="rounded mx-auto w-25 m-4 d-block"  alt="<?php echo $photo_activite_2['alt']; ?>">
            <div class="card-body ">
                <h5 class="card-title m-4"><?php echo $titre_activite_2; ?></h5>
                <p class="card-text m-3"><?php echo $description_activite_2 ; ?></p>
            </div>
        </div>
        <div class="card bg-white m-4 on-hover" style="max-width: 20rem;">
            <img src="<?php echo $photo_activite_3['url']?>" class="rounded mx-auto w-25 m-4 d-block"  alt="<?php echo $photo_activite_3['alt']; ?>">
            <div class="card-body ">
                <h5 class="card-title m-4"><?php echo $titre_activite_3; ?></h5>
                <p class="card-text m-3"><?php echo $description_activite_3 ; ?></p>
            </div>
        </div>
    </div>
</div><!--Activities Section-->

<!-- A propos de nous section -->
<div class="container p-5 mb-5 mt-5">
    <h1 class="text-center">A propos de nous</h1>
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
            <img src="<?php echo $propos_image['url'] ; ?>" class="card-img" alt="<?php echo $propos_image['alt'];?>">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p class="card-text mt-5 text-justify"><?php echo $propos_description ; ?></p>
                </div>
            </div>
        </div>
    </div>
</div><!-- Fin A propos de nous section -->

<!-- Notre équipe section -->
<div class="container-fluid bg-light p-5">
    <h1 class="text-center ">Notre équipe</h1>
    <div class="container d-flex justify-content-around flex-wrap">
        <?php $i=0; while($membres->have_posts()) : $membres->the_post(); ?>
        <div class="card notre-equipe card-animation border border-dark" style="width: 15rem;">
            <img src="<?php the_field('membre_image');?>" class="card-img-top" alt="<?php ?>">
            <div class="card-body">
                <p  id="notre-equipe-text" class="card-text"><?php the_title()?></p>
                <p class="card-text font-italic text-secondary"><?php the_field('membre_poste')?></p>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div><!-- Fin notre equipe section-->

<!-- Section Nos partenaires -->
<div class="container-fluid bg-white p-5">
    <h1 class="text-center mb-5">Nos partenaires</h1>
    <div class="container d-flex justify-content-around flex-wrap">
        <?php while($partenaires->have_posts()) : $partenaires->the_post(); ?>
        <div class="text-wrap text-center" style="width : 15rem;">
            <a href="<?php the_field('lien_partenaire');?>"><img src="<?php the_field('image_partenaire');?>" alt="logo" style="max-width : 10rem;" class="rounded-circle"  /></a>
            <div class="text-break  mt-3 p-2 "><?php the_title();?> </div>           
        </div>
        <?php endwhile; ?>
    </div> 
</div>
<?php 
get_footer();
