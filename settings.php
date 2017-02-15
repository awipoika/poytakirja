<?php
    $my = mysqli_connect("localhost","data15","jNTKdg3NTbRBuVEn","data15");
    
    if($my -> mysql-errno){
        die("Mysql, virhe yhteyden luonnissa: ". $my -> connect-error);
        
    }
    
    $my -> set_charset("utf8");
?>