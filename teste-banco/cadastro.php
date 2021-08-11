<?php
$account = [
    'nome' => $_POST['nome']
];

try {
    $con = new PDO('mysql:host=localhost;dbname=Cadastro', 'root', 'root') or print(mysqli_error());
    $query = $con->prepare("insert into Alunos(nome) values (:nome)")->execute($account);
    echo 'Salvo com sucesso';
}catch (PDOException $exception){
    echo $exception->getMessage();
}