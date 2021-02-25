<?php

class Endereco
{
    public $rua;
    public $bairro;
    public $cidade;
    public $estado;
    public $cep;
    public $complemento;

    function setRua($rua)
    {
        $this->rua = $rua;
    }
    function getRua()
    {
        return $this->rua;
    }
    function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }
    function getBairro()
    {
        return $this->nome;
    }
    function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }
    function getCidade()
    {
        return $this->cidade;
    }
    function setEstado($estado)
    {
        $this->estado = $estado;
    }
    function getEstado()
    {
        return $this->estado;
    }
    function setCep($cep)
    {
        $this->cep = $cep;
    }
    function getCep()
    {
        return $this->cep;
    }
    function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }
    function getComplemento()
    {
        return $this->complemento;
    }
}

?>