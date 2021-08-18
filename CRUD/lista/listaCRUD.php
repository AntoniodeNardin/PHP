<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/2ecd7b4161.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
  <style>
    header li{
    list-style: none;
    margin-top: 30px;
  }
  header ul{
    display: flex;
  }
  #search i{
    margin-left: 10px;
  }
  #new i {
    margin-right: 10px;
  }
  button{
    margin-bottom: 8px;
    border-radius: 4px;
  }
  #search{
    margin-right: 10px;
  }
  button i{
    margin-left: 8px;
  }
  </style>
<div class="container">
            <header>
              <h1>Lista</h1>
              <ul>
                <li>
                <a class = "btn btn-dark" id="search" href="../pesquisa/pesquisaCRUD.php">Pesquisa<i class="fas fa-search"></i></a>
                </li>
                <li>
                <a href="../cadastro/index.php" id="new" class="btn btn-primary"><i class="fas fa-plus"></i>Cadastrar novo usuario</a>
                </li>
              </ul>
            </header>
            <hr>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                      <th scope="col">Nome</th>
                      <th scope="col">Profissão</th>
                      <th scope="col">Data de nascimento</th>
                      <th scope="col">Opções</th>
                    </tr>
                  </thead>
                  <tbody>
<?php
require_once 'lista.php';
?>
   </tbody>
              </table>
              
</div>
</body>
</html>