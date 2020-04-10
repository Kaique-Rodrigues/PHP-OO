<?php 

        require_once("./classes/Mamifero.php");

        class Cachorro extends Mamifero{

            private $cor;

            public function locomover(){
                echo "Estou correndo atrás de um Motoboy";
            }
        
        
            public function emitirSom(){
                echo "Au, AU, AU";
            }
        

            public function roerOsso(){
                echo "Estou roendo Osso";
            }
            

            public function getCor(){
                return $this->cor;
            }
        

            public function setCor($color){
                return $this->cor = $color;
            }
        }











?>