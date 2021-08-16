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
        <h1>Cadastro</h1>
        <hr>
        <form action="cadastroCRUD.php" method="post">
        <div class="row mb-3">
                  <label for="inputName3" class="col-sm-2 col-form-label">Nome</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="nome" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputFuncao3" class="col-sm-2 col-form-label">Função</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="funcao" required>
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="inputData3" class="col-sm-2 col-form-label">Data de Nascimento</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputEmail3 " name="data_de_nascimento" required>
                    </div>
                  </div>
                  
               <p><button type="submit" class="btn btn-primary">Cadastrar</button>  </p>
        </form>
   

<?php
if(isset($_POST['nome'],$_POST['funcao'],$_POST['data_de_nascimento'])){
    $account = [
        'nome' => $_POST['nome'],
        'funcao' => $_POST['funcao'],
        'data_de_nascimento' => $_POST['data_de_nascimento']
    ];
    
    try {
        $con = new PDO('mysql:host=localhost;dbname=CRUD', 'root', 'root') or print(mysqli_error());
        $query = $con->prepare("insert into Pessoas(nome, funcao, data_de_nascimento) values (:nome, :funcao, :data_de_nascimento )")->execute($account);
        echo '<button class = "button button-primary">Salvo com sucesso</button>';
    
    }catch (PDOException $exception){
        echo $exception->getMessage();
    }

};
?>
 </div>
    </body>
</html>
