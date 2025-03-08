<?php
echo"Hola mundo";
echo'<br>';
echo"Hola mundo";
$nombre='Pepe';
$apellido="Gomez";
echo '<br> Hola '. $nombre. ' '. $apellido; /*Concatenacion con puntos*/
echo"<br> Hola $nombre $apellido"; /*concatenacion sin puntos, comilllas dobles*/
$edad=25;
$estatura=1.75;
$mayorEdad= true;//o falso//
$prueba=null;
/** 
 * cometarios
 * 
 */
$prueba=array(1,2,3,4,5,6);
$prueba=[[],2.6,3,true,5, "a"];
//$prueba="Pepe";// mala practica cambio de array a string//
echo'<br>'. $prueba[2];
$persona=[
    "nombre"=>"Pepe",
    "apellido"=> "popo",
    "numerosSuerte"=>[20,12,6],
];
echo "<br> $nombre";
echo "<br> $persona";

?>