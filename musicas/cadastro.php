<?php
$account = [
    'album' => $_POST['album'],
    'artista' => $_POST['artista'],
    'imagem' => $_POST['imagem']
];

try {
    $con = new PDO('mysql:host=localhost;dbname=musicas', 'root', 'root') or print(mysqli_error());
    $query = $con->prepare("insert into albuns(album, artista, imagem) values (:album, :artista, :imagem )")->execute($account);
    echo 'Salvo com sucesso';
    header('lista.php');

}catch (PDOException $exception){
    echo $exception->getMessage();
}
?>
