<?php
//$masyvas = [
//    "name" => "Alius",
//    "age"=> 25
//];
//$write = fopen("file.csv", "a");

//fputcsv($write,[
//    $masyvas['name'],
//    $masyvas['age']

//]);
//fclose($write);
//echo 'Irasem';
//
$mas =[];
$mas2 =[];
$read=fopen("file.csv",'r');

$i=0;
while (($a =fgetcsv($read)) !==false) {
    $mas[] =[
        "name"=>$a[0],
        'age'=>$a[1],
        'leave'=>$a[2],
        'salary'=>[3]
    ];

    //$i++;
}
fclose($read);
var_dump($mas);
die();



?>


 
