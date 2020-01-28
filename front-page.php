<?php

get_header();

?>

    <div class="container">
            <div class="row">
                <div class="col-12">
                    
                    <div class="text">
                        <?php echo get_field("testo_header");?>
                        
                    </div>

                </div>
            </div>
        </div>


        <!-- offerte di lavoro -->
        <div class="container-fluid">
            <div class="row lavoro">
                <div class="col-6" style="background-image: url(<?php echo get_field("immagine")["url"];?>);">
                    
                </div>

                <div class="col-6">
                    <p>Offerte di lavoro Italia / Estero</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua aliqua aliqua.</p>
                    <p><a href="#" class="green"><i class="fas fa-search"></i> Ricerche di lavoro</a></p>
                    <p><a href="#" class="green"><i class="fas fa-clipboard-list"></i> Annunci di lavoro</a></p>
                </div>

            </div>
        </div>



        <!-- offerte di lavoro -->
        <div class="container-fluid">
            <div class="row lavoro reverse">
                <div class="col-6">
                    <!-- qui appare immagine -->
                </div>

                <div class="col-6">
                    <p>Area candidati</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua aliqua aliqua.</p>
                    <p><a href="#" class="green"><i class="far fa-id-badge"></i> Inserisci il tuo cv</a></p>
                    <p><a href="#" class="green"><i class="fas fa-file-contract"></i> Istruzioni e FAQ</a></p>
                </div>

            </div>
        </div>




        <!-- servizi -->
        <div class="container">
            <div class="row">

                
                <!-- testo -->
                <div id="servizi" class="col-12">
                    
                    <p><?php echo get_field("testo_header");?> </p>
                    

                </div>


                <!-- box -->
                <div class="col-3"><p class="box">Ricerca Top Managment</p></div>
                <div class="col-3"><p class="box">Ricerca Middle  Managment</p></div>
                <div class="col-3"><p class="box">Scouting e mappatura</p></div>
                <div class="col-3"><p class="box">Pubblicazione Annunci</p></div>
            </div>
        </div>

<?php

get_footer();

?>

