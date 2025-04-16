<?php
class Persona {
    //Defino los atributos
    private $nombre;
    private $apellido;
    private $direccion;
    private $mail;
    private $telefono;


    //Defino el metodo __construct
    public function __construct ($nombre, $apellido, $direccion, $mail, $telefono) {
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> direccion = $direccion;
        $this -> mail = $mail;
        $this -> telefono = $telefono;
    }
    

    //Defino los metodos get y set
    public function getNombre () {
        return $this -> nombre;
    }
    public function getApellido () {
        return $this -> apellido;
    }
    public function getDireccion () {
        return $this -> direccion;
    }
    public function getMail () {
        return $this -> nombre;
    }

    public function getTelefono() {
        return $this-> telefono;
    }

    public function setNombre ($nuevoNombre) {
        $this ->nombre = $nuevoNombre;
    }
    public function setApellido ($nuevoApellido) {
        $this -> apellido = $nuevoApellido;
    }
    public function setDireccion ($nuevoDireccion) {
        $this -> direccion = $nuevaDireccion;
    }
    public function setMail ($nuevoNombre) {
        $this -> mail = $nuevoMail;
    }
    public function setTelefono($nuevoTelefono) {
        $this->telefono = $nuevoTelefono;
    }


    //Defino Redefino el metodo __toString
    public function __toString () {
        $muestra = "El nombre es: " . $this -> getNombre() . "\n" . "El apellido es:" . $this -> getApellido() . "La direccion es: " . $this -> getDireccion() . "\n" . "El email es: " . $this -> getMail() . "\n" . "El telefono: " . $this -> getTelefono() . "\n";
        return $muestra;
    }
}
?>