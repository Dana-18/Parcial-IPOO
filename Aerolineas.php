<?php
    class Aerolinea {
        //Defino los atributos
        private $identificacion;
        private $nombre;
        private $coleccionVuelos;

        //Defino el metodo __construct
        public function __construct ($identificacionAerolineas, $nombreAerolineas) {
            $this -> identificacion = $identificacionAerolineas;
            $this -> nombre = $nombreAerolineas;
            $this -> coleccionVuelos = [];
        }

        //Defino los metodos de acceso
        public function getIdentificacion () {
            return $this -> identificacion ;
        }
        public function getNombre () {
            return $this -> nombre;
        }
        public function getColeccionVuelos () {
            return $this -> coleccionVuelos;
        }

        public function setIdentificacion ($nuevaIdentificacion) {
            $this -> identificacion = $nuevaIdentificacion;
        }
        public function setNombre ($nuevoNombre) {
            $this -> nombre = $nuevoNombre;
        }
        public function setColeccionVuelos ($nuevaColeccionVuelos) {
            $this -> coleccionVuelos = $nuevaColeccionVuelos;
        }


        //Redefino el metodo __toString

        public function mostrarCol($col) {
            $cadena = "";
            foreach ($this->getColeccionVuelos() as $vuelo) {
                $cadena .= $vuelo;
            }
            return $cadena;
        }
        public function __toString () {
            return
            "La identificacion es: " . $this -> getIdentificacion() . "\n" .
            "El nombre es: " . $this -> getNombre() . "\n" .
            "La coleccion es: " . $this->mostrarCol($this->getColeccionVuelos()) . "\n" ;


        }


        public function darVueloADestino ($destinoSolicitado, $canAsientosLibre) {
            $vuelosDisponibles = array();
            $colVuelos = $this -> getColeccionVuelos();
            foreach ($colVuelos as $objVuelo) {
                $destino = $this -> getDestino();
                $asientosDisponibles = $this -> getCantidadAsientosDisponibles();
                if(($destinoSolicitado == $destino) && ($canAsientosLibre <= $asientosDisponibles)) {
                    array_push($vuelosDisponibles, $objVuelo);
                }
            }
        }

        public function incorporarVuelo($nuevoVuelo) {
            $resultado = true;
            $coleccionVuelos = $this->getColeccionVuelos(); 
            foreach ($coleccionVuelos as $unVuelo) {
                if (($unVuelo->getDestino() == $nuevoVuelo->getDestino()) && ($vuelo->getFecha() == $nuevoVuelo->getFecha()) && ($vuelo->getHorarioPartida() == $nuevoVuelo->getHorarioPartida())
                ) {
                    return false;
                }
            }
        
            array_push($coleccionVuelos, $nuevoVuelo);
            $this->setColeccionVuelos($coleccionVuelos);
            return true;
        }

        public function venderVueloADestino($cantAsientos, $destino, $fecha) {
            $coleccionVuelos = $this->getColeccionVuelos();
            
            foreach ($coleccionVuelos as $vuelo) {
                if ($vuelo->getDestino() == $destino && $vuelo->getFecha() == $fecha && $vuelo->asignarAsientosDisponibles($cantAsientos) == true) {
                    return $vuelo;
                }
            }
            return null;
        }
        
        public function montoPromedioRecaudado() {
            $coleccionVuelos = $this->getColeccionVuelos();
            $total = 0;
            $cantidadVuelos = count($coleccionVuelos);

            if ($cantidadVuelos > 0) {
                foreach ($coleccionVuelos as $vuelo) {
                    $importe = $vuelo->getImporte();
                    $asientosVend = $vuelo->getCantidadAsientosTotales() - $vuelo->getCantidadAsientosDisponibles();
                    $recaudado = $importe * $asientosVend;
                    $total = $total + $recaudado;
                }
                $promedio = $total / $cantidadVuelos;
            }
            return $promedio;
        }
    }