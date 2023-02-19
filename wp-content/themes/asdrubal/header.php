<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css" type='text/css' media='all'>
<?php /*
        <link href="/css/fonts.css" rel="stylesheet">
        
        <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/css/estilo.css">

        <?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/functions.php';
  */ 
wp_head();
 ?>
       

    </head>
<body>
    <header>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/sobre-nosotros/">Sobre Nosotros</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Proyectos</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="https://www.agenceglobalweb.com/" target="_blank">Mi web</a></li>
         </ul>
    </nav>
    </header>