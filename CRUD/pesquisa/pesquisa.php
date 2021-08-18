<?php
if(isset($_POST['pesquisa'])){
    $pesquisa = $_POST['pesquisa'];
    try {
        require_once '../conexão/conexão.php';
        $query = $con->prepare("select idPessoas,nome,funcao,data_de_nascimento from Pessoas where nome like '%$pesquisa%'");
        $query->execute();
        if ($query->rowCount() > 0) {
    
            while ($row = $query->fetch(PDO::FETCH_OBJ)){
    
                echo '
                <form action="../editar/editarCRUD.php" method="post">
                <tr>
                    <td>'.$row->nome.'</td>
                    <td>'.$row->funcao.'</td>
                    <td>'.$row->data_de_nascimento.'</td>
                    <td>
                      <input type="hidden" name="id" value="'.$row->idPessoas.'" hidden>
                      <button type = "submit" class = "btn-primary" > editar <i class="far fa-edit"></i></button></form>
                </tr>';
            }
        }
    } catch (PDOException $exception) {
        echo $exception->getMessage();
    }
}
?>