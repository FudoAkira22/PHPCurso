<?php

class Saiyajin{
//Atributos
    public String $nombre = "Goku";
    public Int $nivelDePelea = 1000;

//Metodos / funcion
    public function Saludar(){
        return "Hola soy ".$this->nombre;
    }

    public function NivelPelea(){
        return $this->nombre." tienen un nivel de pelea de: ".$this->nivelDePelea;
    }

}

$goku = new Saiyajin();//Esto es una insancia
var_dump($goku);
print "<br>";
echo $goku->Saludar()."<br>";
echo $goku->NivelPelea()."<br>";

/*
class Saiyajin2{
    public String $nom;
    public int $nivel;

    public function Saludar($nom){
        return"Hey insecto soy ".$this->nom;
    }

    public function nivelDeP($nom,$nivel){
        return$this->nom." tienen un nivel de pelea de: ".$this->nivel;
    }
}
$vegetea = new Saiyajin2("Vegeta",2000);
echo $vegetea->Saludar("Vegeta");
echo $vegetea->nivelDeP("Vegeta",2000);
*/
?>