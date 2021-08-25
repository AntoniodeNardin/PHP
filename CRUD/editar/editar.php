<?php
if(isset($_POST['id'])){
    $id = $_POST['id'];
try {
    require_once '../conexão/conexão.php';
    $query = $con->prepare("select idPessoas,nome,funcao,data_de_nascimento from Pessoas where idPessoas = $id");
    $query->execute();
    if ($query->rowCount() > 0) {

        while ($row = $query->fetch(PDO::FETCH_OBJ)){
            $id = $row->idPessoas;
            $nome = $row->nome;
            $funcao = $row->funcao;
            $data = $row->data_de_nascimento;
        }
    }
} catch (PDOException $exception) {
    echo $exception->getMessage();
}
}
if(isset($_POST['nome'],$_POST['funcao'],$_POST['data_de_nascimento'])){
    $id = $_POST['id'];

        $nome = $_POST['nome'];
        $funcao = $_POST['funcao'];
        $data = $_POST['data_de_nascimento'];
    
    try {
        require_once '../conexão/conexão.php';
        $query = $con->prepare("UPDATE`Pessoas` SET `nome` = '$nome', `funcao` = '$funcao', `data_de_nascimento` = '$data' WHERE (`idPessoas` = '$id'); )")->execute();
        echo '<button class ="btn btn-secondary">Editado com sucesso</button>';
        header('location:../lista/listaCRUD.php');

    
    }catch (PDOException $exception){
        echo $exception->getMessage();
    }
};
?>