<?php
/*Template Name: pagina interna*/
get_header();

?>

<div class="container">
       

        <div class="row">


            <!-- sidebar -->
            <sidebar class="col-3 menu-laterale">


            <?php wp_nav_menu ( array ("theme_location" => "sidebar", "menu_class" => "navbar-nav", "container-class" => "menu-laterale"  ) ); ?>



            </sidebar>

            <section class="col-8">

                <?php the_content()?>

                <p><a href="#"><i class="fas fa-sign-in-alt"></i> CERC - Code of Practice</a></p>
                <p><a href="#"><i class="fas fa-sign-in-alt"></i> CERC - Directory</a></p>



            </section>

            <div class="col-1">



            </div>






        </div>
    </div>

<?php

get_footer();

?>