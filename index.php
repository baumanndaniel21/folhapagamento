<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Folha de pagamento</title>
</head>
<body>
    <form method="post">
        <label for="valorHora">Quanto você ganha por hora?</label>
        <input id="valorHora"type="text" placeholder="R$" name="valorHora">
        <label for="horasTrabalhadas">Quantas horas trabalhadas no mês?</label>
        <input id="horasTrabalhadas" type="text" placeholder="R$" name="horasTrabalhadas">
        <input type="submit" value="Calcular">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]==="POST"){
        $valorHora = $_POST['valorHora'];
        $horasTrabalhadas = $_POST['horasTrabalhadas'];
        echo "Valor hora: R$".number_format($valorHora,2,',','.');
        echo "<br>Horas trabalhadas no mês: $horasTrabalhadas";
        $salarioBruto = $valorHora * $horasTrabalhadas;
        echo "<br>Salario bruto: R$" .number_format($salarioBruto,2,',','.');
        }
    ?>
</body>
</html>