<?php 
    class Aeropuerto {
        //Defino los atributos 
        private $denominacion;
        private $direccion;
        private $coleccionAerolineas;


        //Defino el metodo __construct
        public function __construct ($denominacionAeropuerto, $direccionAeropuerto, $coleccionAerolineas) {
            $this -> denominacion = $denominacionAeropuerto;
            $this -> direccion = $direccionAeropuerto;
            $this -> coleccionAerolineas = $coleccionAerolineas;
        }

        //Defino los metodos de acceso
        public function getDenominacion () {
            return $this -> denominacion ;
        }
        public function getDireccion () {
            return $this -> direccion;
        }
        public function getColeccionAerolineas () {
            return $this -> coleccionAerolineas;
        }

        public function setDenominacion ($nuevaDenominacion) {
            $this -> denominacion = $nuevaDenominacion;
        }
        public function setDireccion ($nuevaDireccion) {
            $this -> direccion = $nuevaDireccion;
        }
        public function setColeccionAerolineas ($nuevaColeccionAerolineas) {
            $this -> coleccionAerolineas = $nuevaColeccionAerolineas;
        }


        //Redefino el metodo __toString
        public function __toString () {
            $muestra = 
            "La denominacion es: " . $this -> getDenominacion() . "\n" .
            "La direccion es: " . $this -> getDireccion() . "\n" .
            "La coleccion es: " . $this -> getColeccionAerolineas() . "\n" ;
        }

        //Defino el metodo retornarVuelosAerolinea
        public function retornarVuelosAerolineas ($aerolinea) {
                $coleccionAerolineas = $this->getColeccionAerolineas();
                foreach ($coleccionAerolineas as $objAerolinea) {
                    if ($objAerolinea->getDenominacion() == $aerolinea->getDenominacion()) {
                        return $objAerolinea->getColeccionVuelos();
                    } else {
                        return "no hay vuelos ";
                    }
                }
            }
        
            public function ventaAutomatica($cantAsientos, $fecha, $destino) {
                $coleccionAerolineas = $this->getColeccionAerolineas();

                foreach($coleccionAerolineas as $aerolinea) {
                    $vuelosAerolinea = $aerolinea->getColeccionVuelos();

                    for ($i=0; $i < count($vuelosAerolinea); $i++) {
                        if ($vuelosAerolinea[$i]->getDestino() == $destino && $vuelosAerolinea[$i]->getFecha() == $fecha && $vuelosAerolinea[$i]->AsignarAsientosDisponibles($cantAsientos) == true) {
                            return $vuelosAerolinea[$i];
                        } else {
                            return "No hay vuelos";
                        }
                    }
                }
            }

            public function promedioRecaudadoXAerolinea($idAerolinea) {
                $coleccionAerolineas = $this->getColeccionAerolineas();
                $promedio = 0;

                foreach ($coleccionAerolineas as $aerolinea) {
                    if ($idAerolinea == $aerolinea->getIdentificacion()) {
                        $promedio = $aerolinea->montoPromedioRecaudado();
                    }
                }
                return $promedio;
            }
        
    } 
