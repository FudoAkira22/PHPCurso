<?php
class Saiyajin{
    public String $nom;
    public int $nivel;
    public String $texto;
    //Se llama automaticamente
    //Cuando se hace una instancia
    public function __construct($nom,$nivel){
        //Lo que no se define como variable es lo que se para a las otras funciones
        $this->nombre = $nom;
        $this->nivelDePelea = $nivel;
        echo "Metodo constructor de ".$this->nombre."<br> ";
    }

    public function Saludar($texto = "Hola soy"){//Si no se manda un valor esta este por defecto
        return "<br>".$texto." ".$this->nombre;
    }

    public function nivelDeP(){
        return $this->nombre." tiene un nivel de pelea de: ".$this->nivelDePelea;
    }
}

?>