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
    }
}

class Carro extends Veiculo{ /*Herda marca, modelo e ano; tem de especificado o quantidadePortas */
    public int $quantidadePortas;

    public function __construct($marca, $modelo, $ano, $quantidadePortas){
        parent::__construct($marca, $modelo, $ano); //Chama o construct pai, e adiciona o atributo especifico
        $this->quantidadePortas = $quantidadePortas;
    }

        public function exibirDados(){
            parent::exibirDados(); //mesma coisa, chama a função pai e adiciona o atributo
            echo "Portas ". $this->quantidadePortas . "<br><br>";
        }
    }

class Moto extends Veiculo{
    public int $cilindradas; //especificado

    public function __construct($marca, $modelo, $ano, $cilindradas){
        parent::__construct($marca, $modelo, $ano); //herdado
        $this->cilindradas = $cilindradas;
    }
        public function exibirDados(){
            parent::exibirDados(); //herdado
            echo "Cilindradas" . $this->cilindradas . "<br><br>"; //especificado
        }
    }

?>
