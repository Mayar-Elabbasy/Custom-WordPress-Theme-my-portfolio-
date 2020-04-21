<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet"> 
    <title>Portfolio of Mayar Elabbasy</title>
    <?php wp_head(  ); ?>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#" style="font-family: 'Anton', sans-serif;">Portfolio of Mayar Elabbasy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php 
            wp_nav_menu( array(
                "theme_location" => "main-menu",
                "menu_class" => "navbar-nav mr-auto nav-link bg-light float-right",
                "container_class" => "collapse navbar-collapse",
                'link_before' => '<span class="m-3 border border-primary p-1">',
                'link_after' => '</span>',
            ) );
        ?>
        </nav>        
</header>