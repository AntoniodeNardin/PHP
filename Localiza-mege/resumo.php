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
    }
    .resumo{
        margin-top: -325px;
    }
</style>
<body>
    <?php

    $local_retirada = $_POST['local-retirada'];
    $data_retirada = $_POST['data-retirada'];
    $hora_retirada = $_POST['hora-retirada'];
    $cupom = $_POST['cupom'];
    $local_devolucao = $_POST['local-devolucao'];
    $data_devolucao = $_POST['data-devolucao'];
    $hora_devolucao = $_POST['hora-devolucao'];
    $valor = $_POST['valor'];
    $i = $_POST['carro'];
    $oferta = $_POST['oferta'];
    $cupom = $_POST['cupom'];

    require_once 'Classes/Carro.php';
    require_once 'Classes/Cliente.php';
    require_once 'Classes/Reserva.php';


    if (isset($local_retirada, $local_devolucao, $data_retirada, $data_devolucao, $hora_retirada, $hora_devolucao)) {

        $carro[1] = new Carro('Argo', 'Fiat', 'Branco', 1.2, true, 150, 'A', $cupom);
        $carro[2] = new Carro('Kwid', 'Renault', 'Bege', 1.0, true, 130, 'B', $cupom);
        $carro[3] = new Carro('Sandero', 'Renault', 'Azul', 1.6, true, 180, 'C', $cupom);
        $cliente[1] = new Cliente('Rafael', '053385800-64', 'rafael123@gmail.com', 995584319, $cupom);
        $reserva[1] = new Reserva($local_retirada, $data_retirada, $hora_retirada, $local_devolucao, $data_devolucao, $hora_devolucao, $carro[$i], $cliente[1], $cupom);
    }
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
                <h4><?php echo 'Data:' . $reserva[1]->inverteData($data_retirada) . '  Hora:' . $hora_retirada ?></h4>
                <p><?php echo 'Local: ' . $reserva[1]->getLocalRetirada() ?></p>
                <hr>
                <h3>Devolução</h3>
                <h4><?php echo 'Data:' . $reserva[1]->inverteData($data_devolucao) . ' Hora:' . $hora_devolucao ?></h4>
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
                <h4>Diaria <br><?php echo $reserva[1]->diasDatas($data_retirada, $data_devolucao) . ' X R$ ' . $valor ?></h4>
                <p><?php echo 'Total:' . $reserva[1]->total($valor) ?></p>
                <p><?php echo $reserva[1]->desconto($reserva[1]->diasDatas($data_retirada, $data_devolucao));?></p>
                <div class="total">
                    <h3>Valor total Previsto</h3>
                    <h1><?php echo 'R$' . $reserva[1]->total($valor) ?></h1>
                    <p><?php echo 'Em até 10x de R$ ' . ($reserva[1]->total($valor)) / 10 ?></p>
                </div>
            </div>
    </main>
</body>

</html>