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
    h1{
        margin-top:30px;
        margin-left: -30px;
    }
    #list{
        margin-top: 30px;
        margin-bottom: 30px;
    }
    #list i{
        margin-left: 10px;
    }
    section{
        margin-top: 10px;
    }
    form{
        margin-top: 45px;
    }
    header{
        justify-content:space-between;
    }
    header ul{
        display: flex;
    }
    #search{
        margin-left: 10px;
    }
    button{
        border-radius: 4px;
        margin-left: 4px;
    }
</style>
<body>
<div class="container">
    <header>
        <ul>
            <h1>Pesquisa</h1>
            <form action="pesquisaCRUD.php" method="post">
            <input type="search" name="pesquisa" id="search" class="input">
            <button type="submit"><i class="fas fa-search"></i></button>
                </form>
        </ul>
        <a href="listaCRUD.php" id="list" class="btn btn-primary">Lista<i class="fas fa-bars"></i></a>
    </header>
    <hr>
    <section>
        <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Profissão</th>
                        <th>data de nascimento</th>
                        <th>ações</th>
                    </tr>
                    </thead>
                    <tbody>
    </section>
<?php
require_once 'pesquisa.php';
?>
</div>
</tbody>
</body>
</html>