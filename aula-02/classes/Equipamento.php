<?php 

        abstract class Equipamento{

            public $ligado;


            public function __construct(){
                $this->ligado = false;
            }

            public function ligar(){
                if ($this->ligado){
                    echo "O equipamento já está ligado";
                }else{
                    $this->ligado = true;
                    echo "O equipamento foi ligado";
                }
            }



            public function desligar(){
                if(!$this->ligado){
                    echo "O equipamento já está desligado";
                }else{
                    $this->ligado = false;
                    echo "O equipamento foi desligado";
                }
            }

        }
?>