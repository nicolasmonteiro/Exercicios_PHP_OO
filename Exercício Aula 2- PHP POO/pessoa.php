<?php
require_once("endereco.php");

class Pessoa extends Endereco
{
    public $nome;
    public $cpf;
    public $rg;
    public $data_nascimento;

    public function __construct($nome, $cpf, $rg, $rua, $bairro, $cidade, $estado, $cep, $complemento)
    {
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setRg($rg);
        $this->setRua($rua);
        $this->setBairro($bairro);
        $this->setCidade($cidade);
        $this->setEstado($estado);
        $this->setCep($cep);
        $this->setComplemento($complemento);
    }
    
    function getNome()
    {
        return $this->nome;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }
    function getCpf()
    {
        return $this->cpf;
    }
    function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
    function getRg()
    {
        return $this->rg;
    }
    function setRg($rg)
    {
        $this->rg = $rg;
    }
    function getData_nascimento()
    {
        return $this->data_nascimento;
    }
    function setData_nascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;
    }
}
$cadastro = new Pessoa("Diana", "555.555.555.55", "6666666", "Rua do continente", "Salgado", "Igarassu", "PE", "53333-333", "22");
echo $cadastro-> getNome();
echo "<br>";
echo $cadastro-> getCpf();
echo "<br>";
echo $cadastro-> getRg();
echo "<br>";
$cadastro-> setData_Nascimento("12/11/1998");
echo $cadastro-> setData_Nascimento("12/11/1998");
echo "<br>";
echo $cadastro-> getRua();
echo "<br>";
echo $cadastro-> getBairro();
echo "<br>";
echo $cadastro-> getCidade();
echo "<br>";
echo $cadastro-> getEstado();
echo "<br>";
echo $cadastro-> getCep();
echo "<br>";
echo $cadastro-> getComplemento();
echo "<br>";

?>