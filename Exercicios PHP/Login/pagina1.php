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
    session_start();
    if($_SESSION['login'] == true){
        echo 'Bem vindo ao site '.$_SESSION['nome'];
        }else{
            echo 'voce nao esta logado';
            header('location:index.html');
        }
        ?>
    <h1>Pagina privada apenas para usuarios logados</h1>
</body>
</html>