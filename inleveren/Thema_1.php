<?php /* Template Name: Thema_1 */ ?>
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

         <input type="text" id="invoer" onkeyup="myFunction()" placeholder="Zoek hier" title="Zoekbalk">

<ul div id="container">
  <li><a href="http://localhost/wordpress/e-sport-valorant/e-sport-valorant/">Hoofdpagina</a></li>
  <li><a href="http://localhost/wordpress/e-sport-valorant/wedstrijden/">Wedstrijden</a></li>
  <li><a href="http://localhost/wordpress/e-sport-valorant/blogpagina-2/">Blogpagina</a></li>
  <li><a href="http://localhost/wordpress/e-sport-valorant/over-ons/">Over ons</a></li>
  <li><a href="http://localhost/wordpress/e-sport-valorant/contact/">Contact</a></li>
  <li><a href="http://localhost/wordpress/e-sport-valorant/contact/">Formulier</a></li>
  <li><a href="http://localhost/wordpress/e-sport-valorant/blogpagina-2/">nieuws</a></li>
  <li><a href="http://localhost/wordpress/e-sport-valorant/sen-min/">Sen</a></li>
  <li><a href="http://localhost/wordpress/e-sport-valorant/marved-min-2/">Marved</a></li>
  <li><a href="http://localhost/wordpress/e-sport-valorant/sacy-min-2/">Sacy</a></li>
  <li><a href="http://localhost/wordpress/e-sport-valorant/zekken-min-2/">Zekken</a></li>
  <li><a href="http://localhost/wordpress/e-sport-valorant/pancada-min-2/">Pancada</a></li>
  <li><a href="http://localhost/wordpress/e-sport-valorant/blogpagina-2/">evenementen</a></li>
  <li><a href="http://localhost/wordpress/e-sport-valorant/over-ons/">valorant</a></li>
</ul>   
</div>
<?php  get_header() ?>
<?php the_content()  // Om de content in te laden (Gaby) ?> 
<?php get_footer() ?>
<?php wp_footer();   ?>
</div>
<script> 
var now = new Date(); 
var uur = now.getHours(); 
// Als het zo laat is laat dan dit zien "bv goedenacht"
if (uur <6){ document.getElementById("demo").innerHTML =("Goedenacht:)");} 
else if (uur <12){ document.getElementById("demo").innerHTML =("Goedenmorgen(; ");}
else if (uur <18 ){ document.getElementById("demo").innerHTML =("Goedenmiddag;)");}
else if(uur < 24){document.getElementById("demo").innerHTML =("Goedenavond(:"); }


// Functie voor de zoekbalk
function myFunction() { var input, filter, ul, li, a, i, txtValue;  input = document.getElementById("invoer"); filter = input.value.toUpperCase();ul = document.getElementById("container"); li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "block"; // Je ziet alle worden met de letter dat je hebt getyped
        } else {
            li[i].style.display = "none"; // Als de letter er niet in zit laat het niks zien
        }
    }
}


</script> 


</body>
</html>