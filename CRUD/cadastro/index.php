<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2ecd7b4161.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<style>
  p{
    margin-top: 24px;
  }
  a{
    margin-right: 8px;
  }
  header{
    display: flex;
    justify-content: space-between;
  }
  header i{
    margin-left: 10px;
  }
  #list{
    margin-top: 24px;
    margin-bottom: 20px;
  }
  footer{
    margin-top: 50px;
  }

</style>
<body>
    <div class="container">
        <header>
          <h1>Cadastro</h1>
          <a href="../lista/listaCRUD.php" id="list" class="btn btn-primary">Lista<i class="fas fa-bars"></i></a>
        </header>
        <hr>
        <form action="cadastro.php" method="post">
        <div class="row mb-3">
                  <label for="inputName3" class="col-sm-2 col-form-label">Nome</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="nome" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputFuncao3" class="col-sm-2 col-form-label">Profissão</label>
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
                  
               <footer>
                 <a href="../lista/listaCRUD.php" class="btn btn-danger">Cancelar</a>
                   <button type="submit" class="btn btn-primary">Cadastrar</button>
               </footer>
        </form>
   

<?php
require_once 'cadastro.php'
?>
 </div>
    </body>
</html>
