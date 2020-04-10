<?php 

        require_once("./classes/Animal.php");

        class AnimalMarinho extends Animal{

            public function __construct(){
                $this->tipoDeRespiracao == "dentro Da Água";

            }


            public function locomover(){
                echo "Estou me locomovendo nadando detro do Mar";
            }

            public function emitirSom(){
                echo "Estou emitindo Som de Animal Marinho";
            }


            public function respirar(){
                if(!$this->tipoDeRespiracao == "dentro da Água"){
                    echo "Subiu Para respirar";
                }else{
                    echo "Está respirando dentro do Mar";
                }
            }

            
        
        
        
        
        
        
        
        
        
        }











?>