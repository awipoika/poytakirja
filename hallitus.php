<!DOCTYPE html>
<html>
<head>
<title>Pöytäkirjajärjestelmä</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel='stylesheet' type='text/css'>
<style>

h1
{
  text-align: center;
  color: blue;
}
.jaakko
{
  text-align: center;
  display: block;
  font-size: 130%;
}


</style>
</head>

<body>

<div class="top-bar">
<div class="top-bar-left">
<ul class="menu">
<li class="menu-text">Dynasty Tietopalvelu</li>
</ul>
</div>
<div class="top-bar-right">
<ul class="menu">
<li class="menu-text">Kokkola</li>
<li class="menu-text">RSS</li>
</ul>
</div>
</div>

<div class="row">
  <div class="small-12 columns">
  <a class="jaakko" href="http://cosmo.kpedu.fi/~joelkorpijarvi/git/poytakirja/poytakirja.php">Toimielimet</a>
    <h1>Kaupunginhallitus</h1>
  </div>
</div>
  <div class="row">
    <div class="small-4 medium-4 large-4 columns">Vuosi 2017</div>
    <div class="small-4 medium-4 large-4 columns">Vuosi 2016</div>
    <div class="small-4 medium-4 large-4 columns">Dokumentti</div>
  </div>
    <p></p> 
  <?php
  include "settings.php";    
    
    $otsikko = 'SELECT * FROM 533V_hallitus';
    $nayta = $my -> query($otsikko);
    
  while($t = $nayta -> fetch_object()){
    echo '<div class="row">';
    echo '<div class="small-4 medium-4 large-4 columns">'. $t -> Vuosi . '</div>';
    echo '<div class="small-4 medium-4 large-4 columns">'. $t -> Vuosii .'</div>';
    echo '<div class="small-4 medium-4 large-4 columns">'.'<a href="'. $t -> link .'.php">'. $t -> Dokumentti . "</a>".'</div>';
    echo '</div>';
       }  

    $my -> close();
      ?>
</body>
</html>