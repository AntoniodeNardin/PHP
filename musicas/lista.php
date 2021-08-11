<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
try {
    $con = new PDO('mysql:host=localhost;dbname=musicas', 'root', 'root') or print(mysqli_error());
    $query = $con->prepare("select album,artista,imagem from albuns");
    $query->execute();
    if ($query->rowCount() > 0) {

        while ($row = $query->fetch(PDO::FETCH_OBJ)){

            echo '<main><section id="musicas"><div class="card"><div class="card-itens"><img src="'.$row->imagem.'" alt="">'.'<img src="green-play-button-png.png" class="play" alt="" id="botao"><strong><h2>' .$row->artista.'</h2></strong><h3>'. $row->album .'</h3></div></div></div></section></main>';

        }
    }
} catch (PDOException $exception) {
    echo $exception->getMessage();
}


?>
</body>
</html>