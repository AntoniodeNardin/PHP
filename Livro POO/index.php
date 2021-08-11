<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once 'Pessoa.php';
    require_once 'livro.php';

    $p[0] = new Pessoa('Antônio',19,'m');
    $l[0] = new Livro('O Pequeno Príncipe','Antoine de Saint-Exupéry',300,$p[0]);
    $p[1] = new Pessoa('Vithoria',16,'f');
    $l[1] = new Livro('1984','George Orwell',350,$p[1]);
    $l[0]->abrir();
    $l[0]->folhear(50);
    $l[0]->avançarPagina();
    $l[0]->fechar();
    $l[0]->detalhes();
    echo "<hr>";
    $l[1]->abrir();
    $l[1]->folhear(150);
    $l[1]->avançarPagina();
    $l[1]->fechar();
    $l[1]->detalhes();
    
    ?>
</body>
</html>