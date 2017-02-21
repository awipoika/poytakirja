<!DOCTYPE html>
<html>
<head>
<title>Esityslista</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel='stylesheet' type='text/css'>
<style>

h2
{
  text-align: center;
  color: blue;
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
    <div class="row">
    <div class="small-8 columns">
    <a href="http://cosmo.kpedu.fi/~joelkorpijarvi/git/poytakirja/poytakirja.php">Toimielimet &nbsp;&nbsp;-&nbsp;&nbsp;</a>
    <a href="http://cosmo.kpedu.fi/~joelkorpijarvi/git/poytakirja/kphallitus.php">Kaupunginhallitus</a>
  </div>
  </div>
    <h2>Kaupunginhallitus Esityslista <br> 4.2.2017/Asianro 45</h2>
  </div>
</div>
  <div class="row">
    <div class="small-4 medium-4 large-4 columns">Otsikko</div>
    <div class="small-4 medium-4 large-4 columns">Pykälä</div>
    <div class="small-4 medium-4 large-4 columns">Päivämäärä</div>
  </div>
    <p></p> 

  <?php
  include "settings.php";    
    
    $otsikko = 'SELECT * FROM 533V_lista';
    $nayta = $my -> query($otsikko);
    
    while($t = $nayta -> fetch_object()){
    echo '<div class="row">';
    echo '<div class="small-4 medium-4 large-4 columns">'. $t -> otsikko . '</div>';
    echo '<div class="small-4 medium-4 large-4 columns">'. $t -> pykälä .'</div>';
    echo '<div class="small-4 medium-4 large-4 columns">'. $t -> pvm . '</div>';
    echo '</div>';
    
       }
  
    $my -> close();
      ?>
  <div class="row">
    <div class="small-12 columns">
      <p>45</p>
      <h4>Pöytäkirjan tarkastajat</h4>
      <p>KH</p>
      <p>Vs. Kaupunginjohtaja</p>
      <p>Päätös</p>
      
    </div>
  </div>
</body>
</html>