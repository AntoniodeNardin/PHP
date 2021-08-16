<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Pesquisa</h1>
    <hr>
    <form action="pesquisaCRUD.php" method="post">
        <input type="search" name="pesquisa" id="" class="input">
        <input type="submit" value="pesquisar" class="input submit">
    </form>
    <table class="table table-hover">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Profissão</th>
                    <th>data de nascimento</th>
                    <th>ações</th>
                </tr>
                </thead>
                <tbody>
<?php
if(isset($_POST['pesquisa'])){
    $pesquisa = $_POST['pesquisa'];
    try {
        
        $con = new PDO('mysql:host=localhost;dbname=CRUD', 'root', 'root') or print(mysqli_error());
        $query = $con->prepare("select idPessoas,nome,funcao,data_de_nascimento from Pessoas where nome like '%$pesquisa%'");
        $query->execute();
        if ($query->rowCount() > 0) {
    
            while ($row = $query->fetch(PDO::FETCH_OBJ)){
    
                echo '
                <form action="editarCRUD.php" method="post">
                <tr>
                    <td>'.$row->nome.'</td>
                    <td>'.$row->funcao.'</td>
                    <td>'.$row->data_de_nascimento.'</td>
                    <td>
                      <input type="hidden" name="id" value="'.$row->idPessoas.'" hidden>
                      <button type = "submit" class = "btn-primary" >editar</button></form>
                </tr>';
            }
        }
    } catch (PDOException $exception) {
        echo $exception->getMessage();
    }
}
?>
</div>
</tbody>
</body>
</html>