<?php

require_once "Calculadora.php";

$calculadora = new Calculadora();

$calculadora->setNum1($_POST['v1']);

$calculadora->setNum2($_POST['v2']);

$calculadora->setOp($_POST['operacao']);

$calculadora->calcular();

header("Location:index.php?total=".$calculadora->getTotal());