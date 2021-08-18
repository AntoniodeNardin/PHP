<?php
try {
  require_once '../conexão/conexão.php';
    $query = $con->prepare("select idPessoas,nome,funcao,data_de_nascimento from Pessoas");
    $query->execute();
    if ($query->rowCount() > 0) {

        while ($row = $query->fetch(PDO::FETCH_OBJ)){

            echo'
                   <tr>
                      <td>'.$row->nome.'</td>
                      <td>'.$row->funcao.'</td>
                      <td>'.$row->data_de_nascimento.'</td>

                      <td><form action="../editar/editar.php" method="post" class ="off">
                      <input type="hidden" name="id" value="'.$row->idPessoas.'" hidden>
                      <button type = "submit" class = "btn-primary" >editar<i class="far fa-edit"></i></button></form>
                      
                    <form action="../excluir/excluir.php" method="post" class ="off">
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