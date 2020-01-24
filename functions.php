<?php

function child_scripts() {

    wp_enqueue_style( "bootstrap", "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");

                                                                 //il punto serve per concatenare le stringhe 
                                                                 //in questo caso abbiamo messo la / iniziale perchè quando va a stampare non dividerebbe la prima parte dalla seconda
    wp_enqueue_style( "fontawesome", get_stylesheet_directory_uri() . "/assets/fontawesome/css/all.css");
    //nel caso sopra ho importato un css da una cartellina da pc, mentre in tutti gli altri casi sono stati importati da un sito esterno

    wp_enqueue_script( "custom", "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array("jquery") );

    wp_enqueue_script( "popper", "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js");

}
add_action ( "wp_enqueue_scripts", "child_scripts" );

//dice quali e quanti menu ci sono
function child_setup() {

    register_nav_menus ( array(
        "main"  => "Main Menu"
        //se abbiamo due menu bisogna mettere la virgola su quello sopra e dichiararne un altro sotto con un nuovo id e descrizione
    ) );
}
//serve a dire di caricare la funzione quando hai finito di caricare tutto
add_action ( "after_setup_theme", "child_setup" );

//serve per chiudere il file php, in questo caso non servirebbe perchè è uno script ma l'ho messo per esempio
?>