<?php
include 'punto_4.html';
if (isset($_POST['datos'])) {
    $a=1;
    $cant = $_POST ['cantidad'];

    //while ($a <= $cant) {
    //echo 'Hola mundo ' .$a. '<br>';
    // $a++;
    //}

    //  for ($a=1; $a <= $cant; $a++) { 
    //     echo 'hola mundo' .$a .'<br>';
    //  }
    
       do {
         echo 'Hola Mundo' .$a .'<br>';
         $a++;
       } while ($a <= $cant);
}



?>