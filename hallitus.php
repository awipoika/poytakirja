<!DOCTYPE html>
<html>
<head>
<title>Pöytäkirjajärjestelmä</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel='stylesheet' type='text/css'>
<style>

h1
{
  text-align: center;
  color: blue;
}
h4
{
  text-align: center;
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
    <h1>Kaupunginhallitus</h1>
  </div>
</div>
    <a class="red" href="poytakirja.php">Takaisin</a>    
  <div class="row">
    <div class="small-6 medium-6 large-8 columns">Vuosi 2017</div>
    <div class="small-6 medium-3 large-2 columns">Vuosi 2016</div>
    <div class="small-6 medium-3 large-2 columns">Dokumentti</div>
  </div>
    <p></p> 
  <?php
  include "settings.php";    
    
    $otsikko = 'SELECT * FROM 533V_hallitus';
    $nayta = $my -> query($otsikko);
    
  while($t = $nayta -> fetch_object()){
    echo '<div class="row">';
    echo '<div class="small-6 medium-6 large-8 columns">'. $t -> Vuosi . '</div>';
    echo '<div class="small-6 medium-3 large-2 columns">'. $t -> Vuosii .'</div>';
    echo '<div class="small-6 medium-3 large-2 columns">'.'<a href="'. $t -> link .'.php">'. $t -> Dokumentti . "</a>".'</div>';
    echo '</div>';
       }  

    $my -> close();
      ?>
</body>
</html>