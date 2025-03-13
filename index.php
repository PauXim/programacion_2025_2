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
echo '<br>' . $persona['nombre'];
echo '<br>' . $persona['apellido'];

 //Ciclos//
 $numeros=[1,2,3,4,5,6,7,8,9,10,11,12]; //Array/ lista de numeros//

  for($i=0;$i<12;$i++){ //i=contados, Para definir la variable$//
     $parOimpar="";
     if(($numeros[$i]%2)){
         $parOimpar= "Par";
        }
      else{
           $parOimpar="Impar";
        }
      echo "<br>$numeros[$i] es $parOimpar";
    }

     $i=0;
  while ($i <= 11){
     $parOimpar="";
     if(($numeros[$i]%2)){
         $parOimpar= "Par";
        }
      else{
         $parOimpar="Impar";
        }  
      echo "<br>$numeros[$i] es $parOimpar";
      $i++;
    }

    $i=0;
    $estado=true;
    while ($estado){
        if($i==1){
            $i++;
            continue;
        }
       $parOimpar="";
       if(($numeros[$i]%2)){
           $parOimpar= "Par";
          }
        else{
           $parOimpar="Impar";
          }  
        echo "<br>$numeros[$i] es $parOimpar";
        $i++;
        if($i==11){  //para frenar el ciclo, <12
           // $estado=false;
            break;
        }
      }

      $i=0;
      do{
        $parOimpar=" ";
        if(($numeros[$i]%2)==0){
            $parOimpar="Par";   
        }
        else{
            $parOimpar="Impar";
        }
        echo "<br> $numeros[$i] es $parOimpar";
        $i++;

      } while($i<12);

      foreach($numeros as $i => $n){
        $parOimpar=" ";
        if(($n % 2)==0){
            $parOimpar="Par";
        }
        else{
            $parOimpar="impar";
        }
        echo "<br> $i: $n es $parOimpar";
      }
/** 
 * && and
 * || or
 * > mayor que 
 * < menor que
 * >= mayor o igual
 * <= menor o igual
 * != diferente
 * == Igual que
 */

 if ($numeros[0]==0 && $numeros[0]<10){
 }
 elseif($numeros[0]==10 || $numeros[0]<20){
 }
 elseif(!($numeros ==200 && $numeros[0]<=30)){
}
else{

}

$catg='a';
switch ($catg){
    case'a':
        break;
    case'b':
        break;   
    case'c':
         break; 
    default;
         break;
}
function saludar($nombre){
    echo "<br>Hola $nombre";
}
saludar("pepe");

function getsaludo($nombre){
    return "<br> Hola $nombre";
}
echo getsaludo("Ana");

function saludarDos(string $nombre, $apellido){
echo"<br> Hola $nombre $apellido";
 }
 saludarDos("Pepe", 'Gomez');
 saludarDos("Pepe","12");
 saludarDos("12","12");
 saludarDos("12","12");
 saludarDos("12","12");

function saludarTres(string $nombre, $apellido=null){
echo"<br> Hola $nombre  $apellido";
}
 saludarTres("Ana");
 saludarTres("Ana", "Gomez");

function saludarCuatro(...$args){
    $nombre=$args[0];
    $apellido =empty ($args[1])?'': $args[1];
    echo"<br> Hola $nombre, $apellido";

}
 saludarCuatro("Pedro",);
 saludarCuatro("Pedro","Picapiedra");
 saludarCuatro("Pedro","Picapiedra",40);
 saludarCuatro("Pedro","Picapiedra",40,[1,2,3,4]);
 saludarCuatro("Pedro","Picapiedra",40,[1,2,3,4]);
 saludarCuatro("Pedro","Picapiedra",40,[1,2,3,4], true);   
define ("MICONSTANTE", "Prueba");
echo MICONSTANTE;

class PersonaEstudiantes{
    private $nombre=null;
    private $apellido;

    function getNombre(){
         return $this-> nombre;
    }
    function setNombre($val){
        $this->nombre=$val;
    }
}
$persona = new PersonaEstudiantes();
$persona->setNombre("Pablo");
echo"<br>" . $persona->getNombre();