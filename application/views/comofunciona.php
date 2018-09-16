<!DOCTYPE html>
<html>
    <head>
        <title>KaaxClub | Empresa</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <link rel="shortcut icon" href="<?=base_url();?>images/kaaxclub/kaaxfav.png">
        <?=$css;?>
                 
    </head>

    <body class="appear-animate">
        
        <div class="page-loader">
            <div class="loader">Cargando...</div>
        </div>
        
        <div class="page" id="top">
            
            <div class="top-bar bga5">
                <div class="full-wrapper clearfix" align="center" style="padding: 10px;">
                   <img src="<?=base_url();?>images/kaaxclub/logowhite.png" width="140">
                </div>
            </div>
            
            <?=$menuDinamico;?>

            <section class="page-section bg-gray-lighter">
                <div class="relative">
                    
                    <div class="container-fluid">
                    
                        <h2 class="section-title font-alt mb-70 mb-sm-40 wow fadeIn" data-wow-delay="0.1s" data-wow-duration="2s">
                            ¿Cómo funciona?
                        </h2>
                        
                    </div>
                    
                </div>
            </section>
            
            <hr class="mt-0 mb-0 "/>
            
            <footer class="page-section bg-gray-lighter footer pb-60 bga5">
                <div class="container">
                    
                    <div class="local-scroll mb-30 wow fadeInUp" data-wow-duration="1.5s">
                        <a href="#top"><img src="<?=base_url();?>images/kaaxclub/logowhite.png" width="200"  /></a>
                    </div>
                    
                    <div class="footer-text">
                        
                        <div class="footer-copy font-alt">
                            <a href="#" target="_blank">© Kaax 2016. Todos los derechos reservados</a>.
                        </div>
                        
                    </div>
                    
                 </div>
                                  
                 <div class="local-scroll">
                     <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
                 </div>
            </footer>
        
        </div>
        
        <?=$script;?>        
        
    </body>
</html>
