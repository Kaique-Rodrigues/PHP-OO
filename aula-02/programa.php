<?php 

        require_once("./classes/Equipamento.php");
        require_once("./classes/AspiradorDePo.php");
        require_once("./classes/PenDrive.php");


        echo "<h1>Aspirador de Pó</h1>";

        $aspiradorDePo = new AspiradorDePo();
        $aspiradorDePo->ligar();
        echo "<br>";
    
        $aspiradorDePo->aspirar();
        echo "<br>";
    
        $aspiradorDePo->aspirar();
        echo "<br>";
    
        $aspiradorDePo->aspirar();
        echo "<br>";
    
        $aspiradorDePo->aspirar();
        echo "<br>";
    
        $aspiradorDePo->aspirar();
        echo "<br>";
    
        $aspiradorDePo->desligar();
        echo "<br>";
    
        $aspiradorDePo->aspirar();
        echo "<br>";
      
        $aspiradorDePo->limparFiltro();
        echo "<hr>";


        echo "<h1>PenDrive</h1><br>";


       
        $penDrive = new PenDrive();
       $penDrive->adicionarMusica("musica1.mp3");
       echo "<br>";

       $penDrive->adicionarMusica("musica2.mp3");
       echo "<br>";

       $penDrive->adicionarMusica("musica3.mp3");
       echo "<br>";
       

       $penDrive->removerMusica("musica3.mp3");
        echo"<br>";











?>