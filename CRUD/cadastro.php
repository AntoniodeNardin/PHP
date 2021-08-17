<?php
if(isset($_POST['nome'],$_POST['funcao'],$_POST['data_de_nascimento'])){
    $account = [
        'nome' => $_POST['nome'],
        'funcao' => $_POST['funcao'],
        'data_de_nascimento' => $_POST['data_de_nascimento']
    ];
    
    try {
      require 'conexão.php';
        $query = $con->prepare("insert into Pessoas(nome, funcao, data_de_nascimento) values (:nome, :funcao, :data_de_nascimento )")->execute($account);
        echo '<button class = "button button-primary">Salvo com sucesso</button>';
        header('location:listaCRUD.php');
    
    }catch (PDOException $exception){
        echo $exception->getMessage();
    }

};
?>