<section class="container container-padding-60 font-oswald-light font-light" style="margin-top: -470px">
    <div class="content inicial">
        <article class="grid-4">
            <h2 id ="conteudoPrincipal" class="header_box bg-pink-white fontsize45 al-center font-oswald-light font-thin2 header_box_shadow" tabindex="11" >VISITE</h2>
            <ul class="menu_section">
                <li><a href="<?php echo site_url('visite') ?>" tabindex="12" a><img alt=""><img src="../assets/images/home/visite/map-icon.png"  alt="Ícone Como Chegar "> SAIBA COMO CHEGAR</a></li>
                <li><a href="<?php echo site_url('visite') ?>" tabindex="13" a><img  alt=""><img src="../assets/images/home/visite/horarios-icon.png"  alt="Ícone Como Horários">VEJA OS HORÁRIOS</a></li>
                <li><a href="<?php echo site_url('visite') ?>" tabindex="14" a><img src="" alt=""><img src="../assets/images/home/visite/regras-icon.png"   alt="Ícone Regras">REGRAS DO MUSEU</a></li>
                <li><a href="<?php echo site_url('visite') ?>" tabindex="15" a><img src="" alt=""><img src="../assets/images/home/visite/agende-icon.png"  alt="Ícone Agende Sua Visita">AGENDE SUA VISITA</a></li>
            </ul>
        </article>
        <article class="grid-4">
            <h2 class="header_box bg-pink-white fontsize45 al-center font-oswald-light font-thin2 header_box_shadow" tabindex="16">APRENDA</h2>
            <ul class="menu_section">
                <li><a href="<?php echo site_url('sobre') ?>" tabindex="17" a><img src="" alt=""><img src="../assets/images/home/aprenda/history-icon.png"  alt="Ícone História de Oswaldo Aranha">HISTÓRIA DE OSWALDO A.</a></li>
                <li><a href="<?php echo site_url('conteudo/acervo-museu') ?>" tabindex="18" a><img src="" alt=""><img src="../assets/images/home/aprenda/acervo-icon.png"  alt="Ícone Acervo do Museu">ACERVO DO MUSEU</a></li>
                <li><a href="<?php echo site_url('acervo-cientifico') ?>" tabindex="19" a><img src="" alt=""><img src="../assets/images/home/aprenda/article-icon.png"  alt="Ícone Acervo Científico">ACERVO CIENTÍFICO</a></li>
            </ul>
        </article>
        <article class="grid-4">
            <h2 class="header_box bg-pink-white fontsize45 al-center font-oswald-light font-thin2 header_box_shadow" tabindex="20">NOTÍCIAS</h2>
            <ul class="menu_section">
                <li><a href="<?php echo site_url('conteudo/noticias') ?>" tabindex="21" a><img src="" alt=""><img src="../assets/images/home/noticias/noticias-icon.png"  alt="Ícone Noticias">VEJA NOSSAS NOTÍCIAS</a></li>
                <li><a href="<?php echo site_url('conteudo/eventos') ?>" tabindex="22" a><img src="" alt=""><img src="../assets/images/home/eventos/events-icon.png"  alt="Ícone Eventos">PRÓXIMOS  EVENTOS</a></li>
            </ul>
        </article>
        <article class="grid-4 game_box">
            <h2 class="al-center fontsize60" tabindex="23"><p>JOGO DO MUSEU</p></h2>
            <p class="al-center fontsize1b" style="margin-top: 30px;" tabindex="24">Confira o jogo feito em homenagem ao <br>Oswaldo Aranha.</p>
            <a href="http://oswaldoaranhagame.hol.es/" class="btn_game bg-pink-white header_box_shadow ds-block al-center fontsize30 font-bold" tabindex="25">JOGUE AGORA</a>
        </article>
    </div>
</section>

<section class="container container-padding-60 section-2" style="margin-top: -1px">
    <div class="content al-center">
        <blockquote class="font-georgia" style="color: #ffffff;">
            <p class="fontsize1b" style="margin-bottom: 20px;">"A tradição é a experiência dos povos consagrada pelo tempo."</p>
            <cite>Oswaldo Aranha</cite>
        </blockquote>
    </div>
</section>

<section class="container container-padding-60 al-center" style="background: #ffffff;">
    <div class="content">
        <header class="content" style="background: #ff6666; height: 5px">
            <h2 class="fontsize25 font-pink font-oswald-light al-center ds-inblock news_style" tabindex="26">NOVIDADES</h2>;
        </header>

        <div style="margin-top: 40px; width: 100%">
            <?php
            //var_dump($noticias);exit();
            foreach ($noticias as $noticia) {
                echo '<article class="grid-1-3">';
                echo '<a  href="' . site_url('conteudo/visualizar/' . $noticia['slug']) . '">';
                if ($noticia['imagem']) {
                    echo '<div class="box-news border-pink" tabindex="27" style="background: url(' . site_url($noticia['urlPath'] . '/' . 'med_' . $noticia['imagem']) . ') no-repeat center; background-size: cover;"></div>';
                } else {
                    echo '<div class="box-news border-pink"  style="background: url(' . site_url('assets/images/img_nao_disponivel.png') . ') no-repeat center; background-size: cover;"></div>';
                }
                echo '<p class="al-left font-oswald-light font-pink news_description fontsize18 ds-block border-grey"  style="min-height:58px;" tabindex="28">' . substr($noticia['titulo'], 0, 70) . '</p>';
                echo '</a>';
                echo '</article>';
            }
            ?>
        </div>

    </div>
</section>