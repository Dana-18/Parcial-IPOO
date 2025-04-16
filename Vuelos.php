<?php
    class Vuelo {
        //defino los atributos 
        private $numero;
        private $importe;
        private $fecha;
        private $destino;
        private $horaArribo;
        private $horaPartida;
        private $cantidadAsientosTotales;
        private $cantidadAsientosDisponibles;
        private $coleccionPersona;

        //Defino el metodo __construct
        public function __construct ($numero, $importe, $fecha, $destino, $horaArribo, $horaPartida, $cantidadAsientosTotales, $cantidadAsientosDisponibles, $coleccionPersona) {
            $this -> numero = $numero;
            $this -> importe = $importe;
            $this -> fecha = $fecha;
            $this -> destino = $destino;
            $this -> horaArribo = $horaArribo;
            $this -> horaPartida = $horaPartida;
            $this -> cantidadAsientosTotales = $cantidadAsientosTotales;
            $this -> cantidadAsientosDisponibles = $cantidadAsientosDisponibles;
            $this -> coleccionPersona = $coleccionPersona;
        }

        public function __toString() {
            return
            "Numero " . $this->getNumero() . "\n" . 
            "Importe " . $this->getImporte() . "\n" . 
            "Fecha " . $this->getFecha() . "\n" . 
            "Destino " . $this->getDestino() . "\n" . 
            "Hora arribo " . $this->getHoraArribo() . "\n" . 
            "Hora partida " . $this->getHoraPartida() . "\n" . 
            "Asientos totales " . $this->getCantidadAsientosTotales() . "\n" . 
            "Asientos disponibles " . $this->getCantidadAsientosDisponibles() . "\n" . 
            "Personas: " . $this->getColeccionPersona();
        }
        //Defino los metodos de acceso
        public function getNumero () {
            return $this -> numero;
        }
        public function getImporte () {
            return $this -> importe;
        }
        public function getFecha () {
            return $this -> fecha;
        }
        public function getDestino () {
            return $this -> destino;
        }
        public function getHoraArribo () {
            return $this -> horaArribo;
        }
        public function getHoraPartida () {
            return $this -> horaPartida;
        }
        public function getCantidadAsientosTotales () {
            return $this -> cantidadAsientosTotales;
        }
        public function getCantidadAsientosDisponibles () {
            return $this -> cantidadAsientosDisponibles;
        }
        public function getColeccionPersona () {
            return $this -> coleccionPersona;
        }


        public function setNumero ($nuevoNumero) {
            $this -> numero = $nuevoNumero;
        }
        public function setImporte ($nuevoImporte) {
            $this -> importe = $nuevoImporte;
        }
        public function setFecha ($nuevaFecha) {
            $this -> fecha  = $nuevaFecha;
        }
        public function setDestino ($nuevoDestino) {
            $this -> destino = $nuevoDestino;
        }
        public function setHoraArribo ($nuevaHoraArribo) {
            $this -> horaArribo = $nuevaHoraArribo;
        }
        public function setHoraPartida ($nuevaHoraPartida) {
            $this -> horaPartida = $nuevaHoraPartida;
        }
        public function setCantidadAsientosTotales ($nuevaCantidadAsientosTotales) {
            $this -> cantidadAsientosDisponibles = $nuevaCantidadAsientosTotales;
        }
        public function setCantidadAsientosDisponibles ($nuevaCantidadAsientosDisponibles) {
            $this -> cantidadAsientosDisponibles = $nuevaCantidadAsientosDisponibles;
        }
        public function setColeccionPersona ($nuevaColeccionPersona) {
            $this -> coleccionPersona = $nuevaColeccionPersona;
        }


        //Defino el metodo asignarAsientosdisponibles
        public function asignarAsientosDisponibles ($cantAsientos) {
            $asientosDisponibles = getCantidadAsientosDisponibles();
            if ($cantAsientos > $asientosDisponibles) {
                $resultado = false;
            } else {
                $resultado = true;
            }
            return $resultado;
        }
        
    }
?>