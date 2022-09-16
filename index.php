

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
    </style>
    <title>calculadora - PHP</title>
</head>
<body>
    <?php
    $mensagem = "";
    if (isset($_GET["total"])) {
        $mensagem = "<p style='color: green;'>resultado: ".$_GET['total']."</p>";
    }
    ?>
    <main class="container">
        <div id="box">
            <form action="/calcular.php" method="post">
                <span><?php echo $mensagem ?></span>
                <label class="form-label" for="v1">1° valor:</label>
                <input class="form-control" type="text" name="v1" id="v1" placeholder="Valor 1" />

                <label for="operacao" class="form-label">Selecione uma peração:</label>
                <select class="form-select" name="operacao" id="operacao">
                    <option value="somar">+</option>
                    <option value="subtrair">-</option>
                    <option value="multiplicar">*</option>
                    <option value="dividir">/</option>
                </select>

                <label class="form-label" for="v2">2° valor:</label>
                <input class="form-control" type="text" name="v2" id="v2" placeholder="Valor 2" />

                
                <input class="btn btn-outline-secondary my-2" type="submit" name="doCalc" value="Calcular" />
            </form>
            
        </div>
    </main>
</body>
</html>