<?php

class Veiculo{
    public $marca;
    public $modelo;
    public $ano;

    public function __construct($marca, $modelo, $ano){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function exibirDados(){
        echo "Marca: ". $this->marca. "<br>";
        echo "Modelo: ". $this->modelo . "<br>";
        echo "Ano: ". $this->ano . "<br>";
        echo "Portas ". $this->quantidadePortas . "<br><br>";
    }
}

class Carro extends Veiculo{
    public int $quantidadePortas;

    public function __construct($marca, $modelo, $ano, $quantidadePortas){
        parent::__construct($marca, $modelo, $ano);

        $this->quantidadePortas = $quantidadePortas;
    }

}


?>