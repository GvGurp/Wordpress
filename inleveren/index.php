<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src= "boeken.js"></script>
    <title>Document</title>
</head>
<body>
<?php wp_head()?>
<?php echo get_header();?> 
<?php   wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); //Om navigatie te kunnen zien(Gaby) ?>
<?php the_content(); ?>
<script src="javascript.js"> </script>
</body>
</html>