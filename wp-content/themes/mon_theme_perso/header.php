<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><!-- Latest compiled and minified JavaScript -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
<title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 rouge"> <?php dynamic_sidebar('haut-gauche'); ?> (Widget HG)</div>
        <div class="col-md-6 bleu"> <?php dynamic_sidebar('haut-droite'); ?> (Widget HD)</div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <?php wp_nav_menu(array('container_class' => 'menu-header','theme_location' => 'primary')); ?>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        </div>
    </div>
    <div class="row">
            <div class="col-md-12 entete">
                <?php dynamic_sidebar('entete'); ?>
            </div>
        </div>
</div>


<div class="container">
    <section>