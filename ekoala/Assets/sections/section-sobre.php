<?php 

require_once 'function/functions-sobre.php';

// GET TITLE AND SUBTITLE ABOUT PAGE
$pgAbout = get_page(32);
$pgTitle = $pgAbout->post_title;

// EXPLODE TITLE
strpos($pgTitle, '-') ? $titleContent = explodeTitle($pgTitle) : $titulo = $pgTitle;

// GET CONTENT SECTION SOBRE
$pgContent = $pgAbout->post_content;

?>
<section id="about">
    <div class="container">
        <!-- SE TIVER TITULO - SUBTITULO -->
        <?php if (isset($titleContent)) {?>
        <h5 class='subtitulo'><?= $titleContent['subtitulo'] ?></h5>
        <h2 class='titulo'><?= $titleContent['titulo'] ?></h2>

        <!-- SE NÃO TIVER EXIBIR APENAS TITULO -->
        <?php }else{?>
        <h2 class='titulo'><?= $titulo ?></h2>
        <?php }?>

        <p class='content-sobre'><?= $pgContent ?></p>
    </div>
</section>