<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Portal Museu Oswaldo Aranha</title>
        <link rel="stylesheet" href="<?php echo site_url('assets/css/carrossel.css') ?>">
        <link rel="stylesheet" href="<?php echo site_url('assets/css/normalize.css') ?>">
        <link href="<?php echo site_url('assets/plugins/magnific-popup/magnific-popup.css'); ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo site_url('assets/css/boot.css') ?>">
        <link rel="stylesheet" href="<?php echo site_url('assets/css/grid.css') ?>">

        <link rel="shortcut icon" href="<?php echo site_url('assets/images/favicon.png') ?>"/>
    </head>
    <body>     
        <div class="container bg-white-grey menu-height2">
            <div class="content">
                <ul class="font-oswald-light font-bold fontsize090 fl-right text-uppercase">                                      
                    <li class="list-info"><a href="#conteudoPrincipal"  tabindex="1" style="color: #675b5b" class="endereço" >ir para o conteúdo principal</a></li>                    
                    <li class="list-info"><a tabindex="2" class="endereço"><img src="<?php echo site_url('assets/images/home/endereco-icon.png') ?>" class="fl-left img-micro"  alt="" title="Endereço do Museu">Praça Getúlio Vargas nº 585 - Centro - Alegrete RS</a></li>
                    <li class="list-info"><a tabindex="3" class="telefone"><img src="<?php echo site_url('assets/images/home/telefone-icon.png') ?>" class="fl-left img-micro" alt="" title="Telefone para Contato">(55) 3961-1132</a></li>
                    <li class="list-info"><a  target="_blank" href="#" class="facebook"><img src="<?php echo site_url('assets/images/home/facebook-icon.png') ?>"  alt="Página do Facebook" title="Facebook"></a></li>
                </ul>
            </div>
        </div>

        <header class="container bg-black menu-height section-header transparence-85" style="z-index: 100">
            <div class="content">
                <h1 class="fontzero" >
                    Portal Museu Oswaldo Aranha
                    <img src="<?php echo site_url('assets/images/home/logo-museu.png') ?>" alt="Museu Oswaldo Aranha" class="ds-block fl-left grid-2" style="margin-top: -5px;">                        
                </h1>
                <ul class="font-oswald-light font-light fontsize1b fl-right">
                    <li class="menu-item"><a href="<?php echo site_url() ?>" tabindex="5">INÍCIO</a></li>
                    <li class="menu-item"><a href="<?php echo site_url('sobre') ?>" tabindex="6">SOBRE</a></li>
                    <li class="menu-item"><a href="<?php echo site_url('conteudo/eventos') ?>" tabindex="7">EVENTOS</a></li>
                    <li class="menu-item"><a href="<?php echo site_url('conteudo/noticias') ?>" tabindex="8">NOTÍCIAS</a></li>
                    <li class="menu-item"><a href="<?php echo site_url('aprenda') ?>" tabindex="9">APRENDA</a></li>
                 <!--   <li class="menu-item"><a href="<?php //echo site_url('amigos-do-museu') ?>" alt="Amigos do Museu" title="Amigos do Museu"tabindex="7">AMIGOS DO MUSEU</a></li>-->
                    <li class="menu-item"><a href="<?php echo site_url('visite') ?>" tabindex="9">VISITE</a></li>
                    <li class="menu-item"><a href="<?php echo site_url('contato') ?>" tabindex="10">CONTATO</a></li>
                </ul>
            </div>
        </header>

        <?php echo ($capa) ? $capa : null; ?>

        <div class="regulates_position">

            <?php echo ($conteudo) ? $conteudo : null ?>

            <div id="pages" class="grid-10 container-padding-60" style="margin-left: 49.8%">
                <?php echo ($paginacao) ? $paginacao : null ?>
            </div>

            <section class="container container-padding-60 bg-pink-white">
                <div class="content al-center">
                    <header style="background: #ffffff; height: 5px">
                        <h2 class="fontsize25 font-oswald-light al-center ds-inblock shadow_parceiros">PARCEIROS</h2>;
                    </header>

                    <div style="margin-top: 40px;">
                        <div class="grid-5 al-center" style="height: 180px;">
                            <div class="border-red" style="height: 180px; background: #ffffff;">

                                <a  href="http://porteiras.unipampa.edu.br/alegrete/" target="_blank"><img class="ds-inline fl-none"  style="margin-top: 20px;" src="<?php echo site_url('/assets/images/home/unipampa.png') ?>"  alt="Logotipo Unipampa"></a>
                            </div>
                        </div>
                        <div class="grid-6 al-center" style="height: 180px;">
                            <div class="border-red" style="height: 180px; background: #ffffff;">
                                <a href="http://www.alegrete.rs.gov.br/site/"   target="_blank"><img class="ds-inline fl-none"  src="<?php echo site_url('/assets/images/home/prefeitura.png') ?>" alt="Logotipo prefeitura"></a>
                            </div>
                        </div>
                        <div class="grid-5 al-center" style="height: 180px;">
                            <div class="border-red" style="height: 180px; background: #ffffff;">
                                <a href="http://www.ihga.com.br/" target="_blank"><img class="ds-inline fl-none"  style="margin-top: 29px;" src="<?php echo site_url('/assets/images/home/ihga.jpg') ?>" alt="Logotipo IHGA"></a>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <footer class="container container-padding-60 bg-black">
                <div class="content">
                    <ul class="font-oswald-light font-light fontsize1b grid-16 al-center">
                        <li class="menu-item2 fontsize18"><a href="<?php echo site_url() ?>">INÍCIO</a></li>
                        <li class="menu-separador fontsize1">/</li>
                        <li class="menu-item2 fontsize18"><a href="<?php echo site_url('sobre') ?>">SOBRE</a></li>
                        <li class="menu-separador fontsize1">/</li>
                        <li class="menu-item2 fontsize18"><a href="<?php echo site_url('conteudo/eventos') ?>" >EVENTOS</a></li>
                        <li class="menu-separador fontsize1">/</li>
                        <li class="menu-item2 fontsize18"><a href="<?php echo site_url('contato') ?>">CONTATO</a></li>
                        <li class="menu-separador fontsize1">/</li>
                        <li class="menu-item2 fontsize18"><a href="<?php echo site_url('conteudo/noticias') ?>">NOTÍCIAS</a></li>
                        <li class="menu-separador fontsize1">/</li>
                        <li class="menu-item2 fontsize18"><a href="<?php echo site_url('aprenda') ?>">APRENDA</a></li>                        
                        <!--<li class="menu-item2 fontsize18"><a href="<?php //echo site_url('amigos-do-museu') ?>" tabindex="35" alt="amigos do museu">AMIGOS DO MUSEU</a></li>-->
                        <li class="menu-separador fontsize1">/</li>
                        <li class="menu-item2 fontsize18"><a href="<?php echo site_url('visite') ?>">VISITE</a></li>
                        <li class="menu-separador fontsize1">/</li>                       
                    </ul>
                </div>
            </footer>

            <div class="container" style="padding-top: 15px; padding-bottom: 15px;">
                <div class="content al-center">
                    <p class="font-georgia fontsize1">MOA - Museu Oswaldo Aranha - 2017</p>
                </div>
            </div>
            <script src="<?php echo site_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
            <script src="<?php echo site_url('assets/js/plugins/jquery.mask.js'); ?>"></script>
            <script src="<?php echo site_url('assets/plugins/magnific-popup/magnific-popup.js'); ?>" type="text/javascript" ></script>
            <script src="<?php echo site_url('assets/plugins/magnific-popup/magnific-popup-traducao.js'); ?>" type="text/javascript" ></script>
            <script src="<?php echo site_url('assets/js/custom.js'); ?>"></script>
            <script>
                $(document).ready(function() {
                    $("#slide img:eq(0)").addClass("ativo").show();
                });
                var cont = 0; //recebe o numero de slides
                var texto = $("#slide img:eq("+cont+")").attr("name");
                $("#slide").prepend("<p>" + texto + "</p>");
                setInterval(slide, 3000);

                function slide() {
                    if ($(".ativo").next().size()) {
                        $(".ativo").fadeOut().removeClass("ativo").next().fadeIn().addClass("ativo");
                    } else { //se não, irá retornar ao estado inicial do slide 
                        $(".ativo").fadeOut().removeClass("ativo");
                        $("#slide img:eq(0)").fadeIn().addClass("ativo");
                    }
                    if(cont === 5){
                        cont = 0
                    }else{
                        cont++;
                    }
                    texto = $("#slide img:eq("+cont+")").attr("name");
                    $("#slide p").hide().html(texto).delay(500).fadeIn();
                }
            </script>
        </div>
    </body>
</html>
