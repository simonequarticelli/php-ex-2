<!-- Stampare una stringa verde se la
variabile password passata in GET è
uguale a “Boolean”, altrimenti stampare
una stringa rossa. -->

<?php

$password = $_GET['pwd'];

if ($password == ucfirst('boolean')) { //ucfirst <-- prima lettera maiscola
  echo "<span style='color:green'>".'success'."</span>";
}else{
  echo "<span style='color:red'>".'error'."</span>";;
}

 ?>
