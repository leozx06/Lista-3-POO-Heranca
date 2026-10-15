<?php
require_once "Veiculo.php";

$c1 = new Carro("Fiat", "Uno", 1990, 4);
$c1->exibirDados();

$m1 = new Moto("A", "b", 2000, 3);
$m1->exibirDados();

$v1 = new Veiculo ("A", "B", 1990);
$v1->exibirDados();
?>
