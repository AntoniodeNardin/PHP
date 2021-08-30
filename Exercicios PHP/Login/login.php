<?php
session_start();
            $email  = $_POST["email"];
            $senha  = $_POST["senha"];
            $_SESSION['nome'] = $email;
            try {
                $con = new PDO('mysql:host=localhost;dbname=site', 'root', 'root') or print(mysqli_error());
                $query = $con->prepare("select email, senha from usuarios");
                $query->execute();
                if ($query->rowCount() > 0) {
                    while ($row = $query->fetch(PDO::FETCH_OBJ)){
                        if ($row->email == $email && $row->senha == $senha){
                            echo "logado com sucesso<br>";
                            $_SESSION['login'] = true;
                            header('location: pagina1.php');

                        } else{
                            $_SESSION['login'] = false;
                            echo "falha no login";
                        }
                    }
                }
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }

            ?>