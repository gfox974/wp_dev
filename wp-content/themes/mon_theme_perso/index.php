<?php 
    get_header();
?>


<h1>Coucou body</h1>

<?php
// boucle while specifique wp
if (have_posts()) :
   while (have_posts()) :
      the_post();
//get_sidebar();
?>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div class="entry">
    <?php the_content(); ?>
</div>

<?php 
    endwhile; else:
?>
    <p>Contenu non trouvé</p>
<?php endif;
    get_footer();
?>