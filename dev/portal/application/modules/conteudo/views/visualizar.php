<?php
//var_dump($noticia);exit();
?>
<section class="container container-padding-60 font-arial">
    <div class="content">

        <header class="content" style="background: #993333; height: 5px">
            <h2 id="conteudoPrincipal" tabindex="11" class="fontsize25 font-vinho font-oswald-light al-center ds-inblock news_style"><?php echo $noticia['titulo'];?></h2>;
        </header>
        <br><br><br>

        <div class="noticias" tabindex="12">
            <?php echo $noticia['conteudo'];?>
        </div>
</section>