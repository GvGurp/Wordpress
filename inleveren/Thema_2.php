<?php /* Template Name: Thema_2 */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="Thema2"> 
<?php wp_head()?>
<?php   wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); //Om navigatie te kunnen zien(Gaby) ?>
<div class="headerSize"> 
         <div class="titel"> <?php  echo the_title()  //Voor de hoofd titel (Gaby) ?> </div>
         <p id="demo"></p>
         
</div>
<?php  get_header() ?>
<?php the_content()  // Om de content in te laden (Gaby) ?> 
<?php get_footer() ?>
<?php wp_footer();   ?>
</div>
 <script > 
 
var now = new Date(); 
var uur = now.getHours(); 
// Als het zo laat is laat dan dit zien "bv goedenacht"
if (uur <6){ document.getElementById("demo").innerHTML =("Goedenacht:)");} 
else if (uur <12){ document.getElementById("demo").innerHTML =("Goedenmorgen(; ");}
else if (uur <18 ){ document.getElementById("demo").innerHTML =("Goedenmiddag;)");}
else if(uur < 24){document.getElementById("demo").innerHTML =("Goedenavond(:"); }
</script> 

</body>
</html>