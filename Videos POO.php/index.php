<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $sexo = $_POST["sexo"];
        $login = $_POST["login"];

        require_once 'Player.php';
        require_once 'Pessoa.php';
        require_once 'Gafanhoto.php';
        require_once 'Video.php';
        require_once 'Visualizacao.php';
       
        $g[0] = new Gafanhoto($nome,$idade,$sexo,$login);
        $v[0] = new Video('Aula de PHP');
        $g[1] = new Gafanhoto('Vithoria',16,'F','Misaghoul');
        $v[1] = new Video('Aula de MySQL');

        $vis[0] = new Visualizacao($g[0],$v[0]);
        $vis[1] = new Visualizacao($g[1],$v[0]);
        $vis[2] = new Visualizacao($g[0],$v[0]);
        $vis[3] = new Visualizacao($g[0],$v[0]);

        $vis[0]->avaliarNota(10);
        $vis[1]->avaliarNota(10);
        $vis[2]->avaliarNota(10);
        $vis[3]->avaliarNota(10);

        print_r($vis[0]);
        print_r($vis[1]);
        print_r($vis[2]);
        print_r($vis[3]);

        $account = [
            'nome' => $_POST['nome'],
            'idade' => $_POST['idade'],
            'sexo' => $_POST['sexo'],
            'login' => $_POST['login']
        ];
        
        try {
            $con = new PDO('mysql:host=localhost;dbname=Youtube', 'root', 'root') or print(mysqli_error());
            $query = $con->prepare("insert into Gafanhotos(nome, idade, sexo, login) values (:nome, :idade, :sexo, :login )")->execute($account);
            echo 'Salvo com sucesso';

        }catch (PDOException $exception){
            echo $exception->getMessage();
        }

        ?>
    </pre>
</body>
</html>