<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/responsive_flex.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/fontawesome-free-5.0.13/css/fontawesome-all.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/wow.min.js"></script>
    <script>new WOW().init();</script>
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.json">

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="language" content="pt-br,en-us">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#424d23">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="Jumper_Luko, jumper.luko@gmail.com">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="Web Design, site, Joinville">
    <meta name="robots" content="index,follow">
    <meta name="generator" content="Atom,Geany" />
    <meta name="revisit-after" content="7 days"/>
    <meta name="rating" content="general" />
    <meta http-equiv="expires" content="Fri, 10 Apr 2018 12:00:00 GMT" />
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/JumperLuko_icon.png">
</head>
<body <?php body_class(); ?>>
<header class="col-12 centerW items-center header centerText">
    <a class="col-4 center items-center h3 wow zoomIn" href="<?php echo esc_url( home_url( '/' ) ); ?>#home" id="home">Home</a>
    <a class="col-4 center items-center h3 wow zoomIn" href="<?php echo esc_url( home_url( '/' ) ); ?>/index.php/my_jobs/#jobs" id="jobs" title="Visualize o que já foi realizado e alguns serviços em andamento.">Meus Trabalhos</a>
    <nav class="col-4 centerH items-center h5 wow zoomIn dropdown" href="." id="development">
        <nav class="center items-center dropdown-title" title="Área técnica, pode ser um pouco complexo">Desenvolvimento</nav>
        <nav class="dropdown-sub" style="width:100%;">
            <a class="col-12 center items-center h5 wow zoomIn dropdown-option" href="<?php echo esc_url( home_url( '/' ) ); ?>/index.php/my_lab/#development">Laboratório</a>
            <a class="col-12 center items-center h5 wow zoomIn dropdown-option" href="<?php echo esc_url( home_url( '/' ) ); ?>/index.php/my_exemples/#development" id="my_exemples">Exemplos</a>
            <a class="col-12 center items-center h5 wow zoomIn dropdown-option" href="<?php echo esc_url( home_url( '/' ) ); ?>/index.php/references/#development" id="references">Referências</a>
        </nav>
    </nav>
</header>
<script>
    function scrollBanner() {
        var paralaxItem = document.querySelector('.title');
        var scrollPos = window.scrollY;
        // var scrollPosVh = (window.scrollY/screen.height)*100;
        var topHeader = (document.querySelector(".header")).offsetHeight;
        // var topHeaderVh = (topHeader/screen.height)*100;

        // Exemple in ViewHeight (VH), but are slow
        // if (scrollPosVh < 75+topHeaderVh && scrollPos > topHeader){
        // 	paralaxItem.style.height = (75-(scrollPosVh-topHeaderVh)) +"vh";
        if (scrollPos < 400+topHeader && scrollPos > topHeader){
            paralaxItem.style.height = (400-(scrollPos-topHeader)) +"px";
            paralaxItem.style.opacity = 1 - ((scrollPos-topHeader)/1000);
            paralaxItem.style.marginTop = scrollPos-topHeader-20 +"px";
        }else if(scrollPos < topHeader){
            paralaxItem.style.height = 400+"px";
            paralaxItem.style.opacity = 1;
            paralaxItem.style.marginTop= 0+"px";
        }
    }
    window.addEventListener('scroll', scrollBanner);
</script>
