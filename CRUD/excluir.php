<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_POST['id'])){
    $excluir = $_POST['id'];
    try {
        
        $con = new PDO('mysql:host=localhost;dbname=CRUD', 'root', 'root') or print(mysqli_error());
        $query = $con->prepare("delete from Pessoas where idPessoas = $excluir");
        $query->execute();
        if ($query->rowCount() > 0) {
    
            while ($row = $query->fetch(PDO::FETCH_OBJ)){
            }
        }
        header('Location:listaCRUD.php');
        echo 'excluido com sucesso';
        

    } catch (PDOException $exception) {
        echo $exception->getMessage();
    }
}
?>
</body>
</html>