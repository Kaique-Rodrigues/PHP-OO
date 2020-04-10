<?php 

        require_once("./classes/AnimalMarinho.php");
        require_once("./classes/Tubarao.php");
        require_once("./classes/Cachorro.php");

        echo "<h1>Animal Marinho</h1><br>";
        $animalMarinho = new AnimalMarinho();
        $animalMarinho->respirar();
        echo "<br>";

        $animalMarinho->locomover();
        echo "<br>";
        
        $animalMarinho->emitirSom();
        echo "<hr>";



        echo "<h1>Tubarão</h1><br>";

        $tubarao = new Tubarao();

        $tubarao->respirar();
        echo"<br>";

        $tubarao->emitirSom();
        echo"<br>";

        $tubarao->locomover();
        echo"<hr>";


        echo "<h1>Cachorro</h1><br>";
        $cachorro = new Cachorro();
        $cachorro->locomover();
        echo "<br>";

        $cachorro->emitirSom();
        echo"<br>";

        $cachorro->roerOsso();
        echo "<hr>";


        echo "<h1>Get e Set</h1><br>";

        $tubarao->setForcaDaMordida(1000);
        echo "A força Da Mordida de um Tubarão é de " . $tubarao->getForcaDaMordida() . "kg";
        echo "<br>";

        $cachorro->setCor("preta");
        echo "A cor do Cachorro é " . $cachorro->getCor();










?>