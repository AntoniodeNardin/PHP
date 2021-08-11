<?php
try {
    $con = new PDO('mysql:host=localhost;dbname=Cadastro', 'root', 'root') or print(mysqli_error());
    $query = $con->prepare("select nome from Alunos");
    $query->execute();
    if ($query->rowCount() > 0) {
        while ($row = $query->fetch(PDO::FETCH_OBJ)){
            echo '<li>'.'Nome: '. $row->nome .'<li>' ;
        }
    }
} catch (PDOException $exception) {
    echo $exception->getMessage();
}


?>