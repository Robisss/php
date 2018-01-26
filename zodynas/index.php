<?php
include 'helper.php';
$word = null;
 function readCsv(){
 $read = fopen('translate.csv','r');
 $zodynas = [];

  while (($a=fgetcsv($read)) !=false){
      $zodynas[]=[
          'LT'=>$a[0],
          'EN'=>$a[1]
      ];

  }
}


include 'index.view.php';
?>


 
