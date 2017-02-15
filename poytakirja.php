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
<table>
<tr>
<th>Toimielimet </th>
</tr>
<tr>
<th>Viimeisinkokous</th>
</tr>
<tr>
<th>Dokmenttityyppi</th>

  <?php
  include "settings.php";    
    
    $otsikko = 'SELECT * FROM 533V_poytakirjat';
    $nayta = $my -> query($otsikko);
    
  while($t = $nayta -> fetch_object()){
   echo "<tr>";
    echo '<td><a href="'. $t -> toimielimet .'.php">'. $t -> toimielimet."</a></td>";
    echo "<td>". $t -> viimeisinkokous ."</td>";
    echo "<td>". $t -> dokumenttityyppi ."</td>";
   echo  "</tr>";
       }
  

    $my -> close();
      ?>
      </table>
</body>
</html