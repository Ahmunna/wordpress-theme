<?php
/*
    Template Name: Home Page
 */

get_header();

//Advanced Custom Fields
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
?>
<!--Activities Section-->
<div class="container text-center">
    <h2>Nos activités</h2>
    <p><?php echo $description_activite; ?></p>
    <div class="d-flex justify-content-center align-items-center flex-wrap">
        <div class="card bg-white mb-3 ml-4 mr-4" style="max-width: 20rem;">
            <div class="card-body ">
                <img src="<?php echo $photo_activite_1['url']?>" class="rounded mx-auto w-25 m-4 d-block"  alt="<?php echo $photo_activite_1['alt']; ?>">
                <h5 class="card-title m-4"><?php echo $titre_activite_1; ?></h5>
                <p class="card-text m-3"><?php echo $description_activite_1 ; ?></p>
            </div>
        </div>
        <div class="card bg-white mb-3 ml-4 mr-4" style="max-width: 20rem;">
            <div class="card-body ">
                <img src="<?php echo $photo_activite_2['url']?>" class="rounded mx-auto w-25 m-4 d-block"  alt="<?php echo $photo_activite_2['alt']; ?>">
                <h5 class="card-title m-4"><?php echo $titre_activite_2; ?></h5>
                <p class="card-text m-3"><?php echo $description_activite_2 ; ?></p>
            </div>
        </div>
        <div class="card bg-white mb-3 ml-4 mr-4" style="max-width: 20rem;">
            <div class="card-body ">
                <img src="<?php echo $photo_activite_3['url']?>" class="rounded mx-auto w-25 m-4 d-block"  alt="<?php echo $photo_activite_3['alt']; ?>">
                <h5 class="card-title m-4"><?php echo $titre_activite_3; ?></h5>
                <p class="card-text m-3"><?php echo $description_activite_3 ; ?></p>
            </div>
        </div>
    </div>
</div><!--Activities Section-->
<?php
get_footer();
