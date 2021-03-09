<?php
require_once "animal.php";
Class Peixe extends Animal{

    public $tipo;
    //Podendo ser cartilaginoso ou ósseo.

    function __construct($nome,$comprimento,$numpatas,$cor,$ambiente,$velocidademed,$tipo)
    {
    $this->nome = $nome;
    $this->comprimento = $comprimento;
    $this->numpatas = $numpatas;
    $this->cor = $cor;
    $this->ambiente = $ambiente;
    $this->velocidademed = $velocidademed;
    $this->tipo = $tipo;
    }

    public function setTipo($tipo)
  {
    $this->tipo = $tipo;
  }

  public function getTipo()
  {
    return $this->tipo;
  }
  function dadosPeixe()
  {
    
    echo "O peixe possui o nome : $this->nome, com o comprimento: $this->comprimento, possui $this->numpatas barbatanas";
    echo "<br>";
    echo " Com a seguinte cor: $this->cor, que tem por habitat : $this->ambiente e possui velocidade média de $this->velocidademed ";
    echo "<br>";
    echo "Do tipo: $this->tipo";
  }
}
  //Este é o 5, não consegui criar dois objetos
  $objpeixe = new Peixe("Tubarão", "300", "8", "cinza", "mar", "1.5 m/s","cartilaginoso");
  $objpeixe->dadosPeixe();
