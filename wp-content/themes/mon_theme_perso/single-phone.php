<?php 
    get_header();
?>


<h1>Coucou single.telephones</h1>

<?php
// boucle while specifique wp
if (have_posts()) :
   while (have_posts()) :
      the_post();
?>

<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>
<div class="entry">
    <?php the_content(); ?>
    <?php the_field('systeme'); ?> 
    <?php the_field('prix'); ?>
    <?php the_field('modele'); ?>
    <img src="<?php the_field('image'); ?>" alt="">
</div>

<?php 
    endwhile; else:
?>
    <p>Contenu non trouvé</p>

<?php 
endif;
    get_footer();
?>