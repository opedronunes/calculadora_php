<?php

enum tipoCalculo: string{
    case Somar = 'somar';
    case Subtrair = 'subtrair';
    case Multiplicar = 'multiplicar';
    case Dividir = 'dividir';
}

class Calculadora{

    private $total;
    private $v1;
    private $v2;
    private $op;

    public function __construct(){
        $this -> total = 0;
        $this -> v1 = 0;
        $this -> v2 = 0;
    }
    public function setNum1($v1): void{
        $this-> v1 = $v1;
    }
    public function setNum2($v2): void{
        $this-> v2 = $v2;
    }

    public function setOp($operador): void{

        $this-> op = $operador;
    }
    public function somar(): void{
        $this->total = $this->v1 + $this->v2;
    }
    public function subtrair(): void{
        $this->total = $this->v1 - $this->v2;
    }
    public function multiplicar(): void{
        $this->total = $this->v1 * $this->v2;
    }
    public function dividir(): void{
        $this->total = $this->v1 / $this->v2;
    }
    public function getTotal(): float | string{
        return $this->total;
    }

    public function calcular(){

        return match($this->op){
            tipoCalculo::Somar->value => $this->somar(),
            tipoCalculo::Subtrair->value => $this->subtrair(),
            tipoCalculo::Dividir->value => $this->dividir(),
            tipoCalculo::Multiplicar->value => $this->multiplicar(),
            default => $this->total = "Operação não encontrada!"
        };

    }
}





/*
    public function Calcular(){

        if (isset($_POST['doCalc'])) {
            
            if ($_POST['operacao'] == "soma") {
                $resultado = $_POST['v1'] + $_POST['v2'];
                return $resultado;
            }elseif ($_POST['operacao'] == "subtrai") {
                $resultado = $_POST['v1'] - $_POST['v2'];
                return $resultado;
            }elseif ($_POST['operacao'] == "multiplica") {
                $resultado = $_POST['v1'] * $_POST['v2'];
                return $resultado;
            }elseif ($_POST['operacao'] == "divide") {
                $resultado = $_POST['v1'] / $_POST['v2'];
                return $resultado;
            }
        }
    }
}

$calcular = new Calculadora();
 */
?>
<!-- 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        main{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        #result{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        #result h1{
            font-size: 2.5rem;
            font-weight: bold;
        }
        #result a{
            text-decoration: none;
            margin: 20px 0;

        }
    </style>
    <title>Resultado</title>
</head>
<body>
    <div class="container">
        <main>
            <div id="result">
                <h1></h1>
                <a href="/index.php">Voltar</a>
            </div>
        </main>
    </div>
</body>
</html>

-->
