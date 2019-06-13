<!-- Stampare una stringa verde se la
variabile password passata in GET è
uguale a “Boolean”, altrimenti stampare
una stringa rossa. -->

<?php

$password = $_GET['pwd'];

if ($password == ucfirst('boolean')) { //ucfirst <-- prima lettera maiscola
  echo "<span style='color:green; font-size:50px'>".'success'."</span>";
}else{
  echo "<span style='color:red; font-size:50px'>".'error'."</span>";;
}

 ?>
