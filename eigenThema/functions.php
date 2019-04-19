<?php
    function thema_Zanhua_bronnen(){
        wp_enqueue_style('style', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'thema_Zanhua_bronnen')
?>