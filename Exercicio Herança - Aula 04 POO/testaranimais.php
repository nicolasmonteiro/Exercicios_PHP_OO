<?php
require_once "mamifero.php";
Class TestarAnimais extends Mamifero{
    

    public function Main()
    {
        echo $this->Dadosmamifero();
        echo "<br>";
        echo $this->dadosAnimal();
        
    }
    
}



$objmamifero = new TestarAnimais("Camelo", "150 cm", "4", "Amarelo", "Terra", "2.0 m/s","plantas espinhosas, arbustos e grama seca");
$objmamifero-> Main();
