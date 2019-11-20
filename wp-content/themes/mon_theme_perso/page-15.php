<?php 
    get_header();
?>


<h1>Coucou page-15</h1>
<!-- corresponds au post= dans l'interface de la page correspondant à mentions legales -->

<?php
// boucle while specifique wp
if (have_posts()) :
   while (have_posts()) :
      the_post();
?>

<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>
<div class="entry">
    <?php the_content(); ?>
</div>

<?php 
    endwhile; else:
?>
    <p>Contenu non trouvé</p>

<?php 
endif;
    get_footer();
?>