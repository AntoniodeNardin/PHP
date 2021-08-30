<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style-resumo.css">
    <title>Resumo Localiza MEGE</title>
</head>
<style>
    img{
        box-shadow: 0px 2px 4px #000002;
        border-radius: 16px;
        margin-top: 30px;
        background-color: white;
    }
    .resumo{
        margin-top: -325px;
        background-color: white;
    }
    .desconto{
        color: orange;
        text-decoration: underline;
    }
    .valor-total{
        font-size: 22px;
    }
    body{
        background-color: #00984915
    }
    .total{
        border-radius: 0px 0px 10px 10px;
        margin-bottom: -20px;
    }
    .taxa{
        color: green;
        text-decoration: underline;
    }
</style>
<body>
    <?php
    session_start();

    $local_retirada = $_SESSION['local-retirada'];
    $data_retirada = $_SESSION['data-retirada'];
    $hora_retirada = $_SESSION['hora-retirada'];

    $local_devolucao = $_SESSION['local-devolucao'];
    $data_devolucao = $_SESSION['data-devolucao'];
    $hora_devolucao = $_SESSION['hora-devolucao'];

    $valor = $_POST['valor'];
    $i = $_POST['carro'];
    $oferta = $_POST['oferta'];
    $cupom = $_POST['cupom'];


    require_once 'Classes/Carro.php';
    require_once 'Classes/Cliente.php';
    require_once 'Classes/Reserva.php';
    require_once 'carros.php';
        $cliente[1] = new Cliente($_SESSION['nome'], $_SESSION['cpf'], $_SESSION['email'], $_SESSION['numero'], $cupom);
        $reserva[1] = new Reserva($_SESSION['local-retirada'], $_SESSION['data-retirada'], $_SESSION['hora-retirada'], $_SESSION['local-devolucao'], $_SESSION['data-devolucao'], $_SESSION['hora-devolucao'], $carro[$i], $cliente[1], $cupom);

    ?>
    <main>
        <header>
            <h1>Localiza-Mege</h1>
        </header>
        <div class="container">
            <?php
            switch ($carro[$i]->getGrupo()) {
                case 'A':
                    echo '  <img src="imagem/Fiat-argo.png" alt="">';
                    break;
                case 'B':
                    echo ' <img src="imagem/Renault_KWID.png" alt="">';
                    break;
                case 'C':
                    echo '<img src="imagem/Renault-sandero.png" alt="">';
                    break;
                default:
                    # code...
                    break;
            } ?>

            <div class="resumo">

                <h2>Resumo da Reserva</h2>
                <h3>Retirada</h3>
                <h4><?php echo 'Data:' . $reserva[1]->inverteData($data_retirada) . ' | Hora:' . $hora_retirada ?></h4>
                <p><?php echo 'Local: ' . $reserva[1]->getLocalRetirada() ?></p>
                <hr>
                <h3>Devolução</h3>
                <h4><?php echo 'Data:' . $reserva[1]->inverteData($data_devolucao) . ' | Hora:' . $hora_devolucao ?></h4>
                <p><?php echo 'Local: ' . $reserva[1]->getLocalDevolução() ?></p>
                <hr>
                <h3>Grupo</h3>
                <h4>Grupo <?php echo $carro[$i]->getGrupo() ?></h4>
                <p><?php echo $carro[$i]->getModelo() ?></p>
                <hr>
                <h3><?php switch ($oferta) {
                        case 'std':
                            echo 'Oferta Standard';
                            break;
                        case 'plus':
                            echo 'Oferta Plus';
                        default:
                            # code...
                            break;
                    } ?></h3>
                <h4>Diária <br><?php echo $reserva[1]->diasDatas($data_retirada, $data_devolucao) . ' X R$ ' . $valor ?></h4>
                <p class="taxa"><?php echo $reserva[1]->teste_local_taxa()?></p>
                <p class="desconto"><?php echo $reserva[1]->desconto($reserva[1]->diasDatas($data_retirada, $data_devolucao));?></p>
               
                <p><?php echo 'Total : ' . $reserva[1]->total($valor) ?></p>
                
                <hr>
                <h3>Locatário</h3>
                    <p><h4><?php echo 'Nome: '. $_SESSION['nome'] ?> <?php echo '| CPF: ' .$_SESSION['cpf'];?></h4></p>
                    <p><?php echo 'Email: ' .$_SESSION['email']?><?php echo ' | Número: '. $_SESSION['numero'];?></p>
                <div class="total">
                    <h2 id="valor-total">Valor total Previsto</h2>
                    <h1><?php echo 'R$' . $reserva[1]->total($valor) ?></h1>
                    <p><?php echo 'Em até 10x de R$ ' . ($reserva[1]->total($valor)) / 10 ?></p>
                </div>
            </div>
    </main>
</body>

</html>