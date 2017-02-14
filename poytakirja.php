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
    <h1>Toimielimet</h1>
  </div>



<div class="row">
    <div class="small-12 medium-6 large-4 columns">
    <p>Toimielimet</p>
    </div>
    <div class="small-12 medium-6 large-4 columns">
    <p>Viimeisin kokous</p>
    </div>
    <div class="small-12 medium-6 large-4 columns">
    <p>Dokumenttityyppi</p>
    </div>   
    </div>
    </div>
    
<div class="row">
  <?php
    include "settings.php";
    
    $otsikko = 'SELECT * FROM 533V_poytakirjat';
    $nayta = $my -> query($otsikko);
    
  while($t = $nayta -> fetch_object()){
    echo '<a href="'. $t -> toimielimet .'.php">'. $t -> toimielimet."</a>"."</div>";
    echo "<p>". $t -> viimeisinkokous ."</p>"."</div>";
    echo "<p>". $t -> dokumenttityyppi ."</p>"."</div>"; 
  }
  
    $my -> close();
      ?>
</body>
</html>