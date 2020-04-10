<?php 

        require_once("./classes/AnimalMarinho.php");

        class Tubarao extends AnimalMarinho{

            private $forcaDaMordida;

            public function locomover(){
                echo "estou nadando a 40km/h";
            }
        
        
            public function emitirSom(){
                echo "dan dan dan dan dan ";
            }
        
        
            public function getForcaDaMordida(){
                return $this->forcaDaMordida;
            }
        

            public function setForcaDaMordida($forcaM){
                return $this->forcaDaMordida = $forcaM;
            }
        
        
        
        
        }








?>