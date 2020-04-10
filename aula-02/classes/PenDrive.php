<?php 

        require_once("./classes/Equipamento.php");

        class PenDrive{

           private $listaDeMusica;


            public function __construct(){
                $this->listaDeMusica = [];
            }
        
            public function adicionarMusica($musica){
                array_push($this->listaDeMusica, $musica);
                echo "A musica ". $musica ." foi adicionada";
            }

            public function removerMusica($musicaP){
                foreach ($this->listaDeMusica as $key => $musica) {
                    if($musicaP == $musica){
                    unset($this->listaDeMusica[$key]);
                    echo "A musica ". $musicaP . " foi removida com sucesso";
                }
            }
            }
        }

        
        
        
        
        






?>