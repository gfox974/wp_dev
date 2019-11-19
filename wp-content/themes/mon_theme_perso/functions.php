<?php
add_action('widgets_init','monthemeperso_init_sidebar'); // on passe en action l'init du widget custom qu'on definit
add_action('init','monthemeperso_init_menu'); // là, on active la prise en charge de menus

function monthemeperso_init_sidebar() {
    register_sidebar(array(
        'name' => __('haut-gauche', 'monthemeperso'),
        'id' => 'hautgauche',
        'description' => __('region en haut a gauche', 'monthemeperso'),
    ));
    register_sidebar(array(
        'name' => __('haut-droite', 'monthemeperso'),
        'id' => 'hautdroite',
        'description' => __('region en haut a droite', 'monthemeperso'),
    ));
    register_sidebar(array(
        'name' => __('entete', 'monthemeperso'),
        'id' => 'entete',
        'description' => __('entête', 'monthemeperso'),
    ));
    register_sidebar(array(
        'name' => __('bas-gauche', 'monthemeperso'),
        'id' => 'basgauche',
        'description' => __('region en bas a gauche', 'monthemeperso'),
    ));
    register_sidebar(array(
        'name' => __('bas-droite', 'monthemeperso'),
        'id' => 'basdroite',
        'description' => __('region en bas a droite', 'monthemeperso'),
    ));
}

function monthemeperso_init_menu() {
    register_nav_menu('primary', __('primary menu','monthemeperso'));
}

?>