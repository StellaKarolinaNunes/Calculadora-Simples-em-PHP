<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
    <title>Calculadora Simples em PHP</title>

</head>

<body>
    <!-- 
    <?php

    $result = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];


        switch ($operation) {
            case 'adicao':
                $result = $num1 + $num2;
                break;
            case 'subtracao':
                $result = $num1 - $num2;
                break;
            case 'multiplicacao':
                $result = $num1 * $num2;
                break;
            case 'divicao':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = 'Erro: Divisão por zero!';
                }
                break;
            case 'resto':
                $result = $num1 % $num2;
                break;
            default:
                $result = 'Escolha uma operação válida.';
                break;
        }
    }
    ?> -->

    <form method="POST">

        <header>
            <h2>Calculadora simples</h2>
            <br>
            <p><i class="fa fa-code"></i> Html, Css e Php</p>

        </header>

        <div class="con">
            <div class="field-set">
                <span class="input-item">
                    <i class="fa fa-hashtag"></i>
                </span>

                <input class="form-input" name="num1" placeholder="Primeiro número" required>
                <br>
                <span class="input-item">
                    <i class="fa fa-hashtag"></i>
                </span>

                <input class="form-input" name="num2" placeholder="Segundo número" required>
                <br>
                <span class="input-item">
                    <i class="fa fa-chevron-down"></i>
                </span>


                <select class="form-input" name="operation" required>
                    <option value="" disabled selected>Escolha uma operação</option>
                    <option value="adicao">Soma</option>
                    <option value="subtracao">Subtração</option>
                    <option value="multiplicacao">Multiplicação</option>
                    <option value="divicao">Divisão</option>
                    <option value="resto">Resto</option>
                </select>
                <br><br>
                <div class="other">
                    <button class="btn submits limpar" type="reset">
                        <i class="fa fa-trash"></i> Limpar
                    </button>

                    <button class="btn submits  calcular" type="submit">
                        <i class="fa fa-calculator"></i> Calcular
                    </button>

                </div>
            </div>
        </div>

        <?php if ($result !== ''): ?>
            <div class="result">
                <h3>Resultado é: <?php echo $result; ?></h3>
            </div>
        <?php endif; ?>

    </form>

</body>

</html>