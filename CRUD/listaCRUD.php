<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2ecd7b4161.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>
  h1{
    margin-top: 20px;
  }
  button{
    margin:5px;
    border-radius: 4px;
  }
  i{
    margin-left: 10px;
  }
</style>
<body>
<div class="container">
            <h1>Lista</h1>
            <hr>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                      <th scope="col">Nome</th>
                      <th scope="col">Função</th>
                      <th scope="col">Data de nascimento</th>
                      <th scope="col">Opções</th>
                    </tr>
                  </thead>
                  <tbody>
<?php
try {
    $con = new PDO('mysql:host=localhost;dbname=CRUD', 'root', 'root') or print(mysqli_error());
    $query = $con->prepare("select idPessoas,nome,funcao,data_de_nascimento from Pessoas");
    $query->execute();
    if ($query->rowCount() > 0) {

        while ($row = $query->fetch(PDO::FETCH_OBJ)){

            echo'
                   <tr>
                      <td>'.$row->nome.'</td>
                      <td>'.$row->funcao.'</td>
                      <td>'.$row->data_de_nascimento.'</td>

                      <td><form action="editarCRUD.php" method="post" class ="off">
                      <input type="hidden" name="id" value="'.$row->idPessoas.'" hidden>
                      <button type = "submit" class = "btn-primary" >editar<i class="far fa-edit"></i></button></form>
                      
                    <form action="excluir.php" method="post" class ="off">
                    <input type="hidden" name="id" class ="off" value="'.$row->idPessoas.'" hidden>
                    <button type = "submit" class="btn-danger" >excluir<i class="fas fa-trash"></i></button></form>
                    </td>
                    </tr>
        </div>';
        }

    }
} catch (PDOException $exception) {
    echo $exception->getMessage();
}
?>
   </tbody>
              </table>
</div>
</body>
</html>