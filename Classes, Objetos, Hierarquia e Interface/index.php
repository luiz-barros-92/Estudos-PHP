<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <pre>
        <?php 
        require_once 'Publicacao.php';
        require_once 'Pessoa.php';
        require_once 'Livro.php';
            $p = array();
            $p[1] = new Pessoa("Marco", 15, "M");
            
            //print_r($p[1]);

            $l = array();
            $l[0] = new Livro("Alice no Pais de Gales","Marcelo",135,0, false, $p[1]);
            //print_r($l[0]);            
            $l[0]->abrir();
            //$l[0]->fechar();            
            
            $l[0]->folhear(80);
            //$l[0]->avancarPag();
            //$l[0]->avancarPag();
            $l[0]->voltarPag();
            $l[0]->detalhes();
            
        ?>
    </pre>
</body>
</html>
