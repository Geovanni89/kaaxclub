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
            
            <div class="top-bar ">
                <div class="full-wrapper clearfix" align="center" style="padding: 10px;">
                   <img src="<?=base_url();?>images/kaaxclub/logo_kaax.png" width="140">
                </div>
            </div>
            
            <?=$menuDinamico;?>

            <section class="page-section bg-gray-lighter">
                <div class="relative">
                    
                    <div class="container-fluid">
                    
                        <h2 class="section-title font-alt mb-70 mb-sm-40">
                            HOLA MUNDO 3
                        </h2>
                        
                        <div class="row">
                            
                            <div class="col-sm-5 col-sm-offset-1">
                                <div class="section-text mb-70 mb-xs-40">
                                    <span class="dropcap font-alt">M</span>arius&nbsp;auctor ex&nbsp;id&nbsp;urna faucibus porttitor In&nbsp;maximus ligula semper 
                                    metus pellentesque mattis.Maecenas volutpat, diam enim sagittis quam, id&nbsp;porta quam.
                                    Sed id&nbsp;dolor consectetur fermentum nibh volutpat, accumsan purus.
                                </div>
                            </div>
                            
                            <div class="col-sm-5">
                                <div class="section-text mb-70 mb-xs-40">
                                    <span class="dropcap font-alt">P</span>hasellus consectetur vel nunc vitae tempus. Maecenas commodo ipsum non est consequat euismod. 
                                    Aenean sit amet urna ac velit dapibus ullamcorper at ac ligula. Duis sed laoreet leo. 
                                    Morbi ac semper lorem ipsum tortor. 
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="align-center">
                            <img src="<?=base_url();?>images/kaaxclub/signature.png" width="170" height="55" alt="" />
                        </div>
                        
                    </div>
                    
                </div>
            </section>

            <section class="page-section" id="features">
                <div class="relative">
                    
                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        Features
                    </h2>
                    
                    <div class="container">
                        <div class="row multi-columns-row alt-features-grid">
                        
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="alt-features-item align-center">
                                    <div class="mb-10">
                                        <img src="<?=base_url();?>images/kaaxclub/feature-1.png" width="217" height="163" alt="" />
                                    </div>
                                    <h3 class="alt-features-title font-alt">Responsive</h3>
                                    <div class="alt-features-descr mb-30">
                                        Lorem ipsum dolor sit amet, c-r adipiscing elit. 
                                        In maximus ligula semper metus pellentesque mattis. 
                                        Maecenas  volutpat, diam enim.
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-mod btn-gray btn-circle">Learn more <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="alt-features-item align-center">
                                    <div class="mb-10">
                                        <img src="<?=base_url();?>images/kaaxclub/feature-2.png" width="217" height="163" alt="" />
                                    </div>
                                    <h3 class="alt-features-title font-alt">Easy To Use</h3>
                                    <div class="alt-features-descr mb-30">
                                        Proin fringilla augue at maximus vestibulum. 
                                        Nam pulvinar vitae neque et porttitor. Praesent sed 
                                        nisi eleifend, lorem fermentum orci sit amet.
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-mod btn-gray btn-circle">Learn more <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="alt-features-item align-center">
                                    <div class="mb-10">
                                        <img src="<?=base_url();?>images/kaaxclub/feature-3.png" width="217" height="163" alt="" />
                                    </div>
                                    <h3 class="alt-features-title font-alt">Retina-ready</h3>
                                    <div class="alt-features-descr mb-30">
                                        Curabitur iaculis accumsan augue, nec finibus mauris pretium eu. 
                                        Duis placerat ex gravida nibh tristique porta. 
                                        Suspendisse ultricies eros blandit.
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-mod btn-gray btn-circle">Learn more <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
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
