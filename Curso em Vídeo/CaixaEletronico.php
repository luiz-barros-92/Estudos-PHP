<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 13</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $saque = $_GET['saque'] ?: 0;

        $cem = intdiv($saque, 100);
        $restocem = $saque % 100;

        $cinquenta = intdiv($restocem, 50);
        $restocinquenta = $restocem % 50;

        $dez = intdiv($restocinquenta, 10);
        $restodez= $restocinquenta % 10;

        $cinco = intdiv($restodez, 5);
    ?>
    <main>
        <h2>Caixa Eletrônico</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="valor">Qual valor você deseja sacar? (R$)*</label>
        <input type="number" name="saque" id="idsaque" step="5">
        <p style="font-size: 12px;">*notas disponíveis: R$100, R$50, R$10, R$5</p>
        <input type="submit" value="Sacar">
        </form>
    </main>
<section>
    <h3>Saque de R$<?=number_format($saque, 2, ',','.')?> realizado</h3>
    <p>O caixa eletrônico vai te entregar as seguntes notas:</p>
    <ul>
        <li><img src="100-reais.jpg" width="100" height="44" alt="100 reais"> x<?=$cem?></li>
        <li><img src="50-reais.jpg" width="95" height="40" alt="50 reais"> x<?=$cinquenta?></li>
        <li><img src="10-reais.jpg" width="85" height="34" alt="10 reais"> x<?=$dez?></li>
        <li><img src="5-reais.jpg" width="80" height="30" alt="5 reais"> x<?=$cinco?></li>
    </ul>
</section>
</body>
</html>
