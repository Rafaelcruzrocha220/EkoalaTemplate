<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?= get_template_directory_uri() ?>/Assets/img/ekoala_icon.png" type="image/x-icon">
    
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>Ekoala</title>
    <?php wp_head() ?>
</head>
<body>  
    <header>
        <div class="row">
            
            <!-- section top -->
            <?php get_template_part('Assets/templates/menu_info'); ?>
            

            <!-- Nav menu -->
            <?php get_template_part('Assets/templates/menu_top'); ?>
            
        </div>
        
    </header>