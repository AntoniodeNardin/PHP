<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/style-carros.css">
    <title>Carros Localiza Mege</title>
</head>
<pre>
    <?php
    $cliNome = $_POST['nome'];
    $cliEmail = $_POST['email'];
    $cliCPF = $_POST['cpf'];
    $cliNumero = $_POST['numero'];
    $cupom = $_POST['cupom'];

    $local_retirada = $_POST['local-retirada'];
    $data_retirada = $_POST['data-retirada'];
    $hora_retirada = $_POST['hora-retirada'];

    $local_devolucao = $_POST['local-devolucao'];
    $data_devolucao = $_POST['data-devolucao'];
    $hora_devolucao = $_POST['hora-devolucao'];

    require_once 'Classes/Carro.php';
    require_once 'Classes/Cliente.php';
    require_once 'Classes/Reserva.php';


    if (isset($local_retirada, $local_devolucao, $data_retirada, $data_devolucao, $hora_retirada, $hora_devolucao)) {

        $carro[1] = new Carro('Argo', 'Fiat', 'Branco', 1.2, true, 150, 'A', $cupom);
        $carro[2] = new Carro('Kwid', 'Renault', 'Bege', 1.0, true, 130, 'B', $cupom);
        $carro[3] = new Carro('Sandero', 'Renault', 'Azul', 1.6, true, 180, 'C', $cupom);
        $cliente[1] = new Cliente($cliNome, $cliCPF, $cliEmail, $cliNumero, $cupom);
    }
    $carro[1]->testeCupom($cupom);
    $carro[2]->testeCupom($cupom);
    $carro[3]->testeCupom($cupom);
    ?>
</pre>
<style>
    .valor{
        color: green;
    }
    .desconto{
        font-size: 13px;
        color: orange;
    }
</style>
<body>
    <header>
        <h1>Localiza-Mege</h1>
    </header>
    <h1>Selecione o melhor carro para você</h1>

    <section class="flex">
        <fieldset class="card">
            <section class="carro">
                <h2><?php echo 'Grupo ' . $carro[1]->getGrupo() ?></h2>
                <h3><?php echo $carro[1]->getMarca(), ' ', $carro[1]->getModelo() ?></h3>
                <img src="imagem/Fiat-argo.png" class="img-carro" alt="">
                <form action="resumo.php" method="post">
                    <button type="submit">
                        <div class="oferta">
                            <div class="oferta-content">
                                <h2>Oferta standard</h2>
                                <h2 class="desconto"><?php echo $carro[1]->desconto($carro[1]->getCupom()) ?></h2>
                                <div class="content-flex">
                                    <h1 class="valor">R$ <?php echo $carro[1]->getDiaria() ?></h1>
                                    <ul>
                                        <li>KM livre</li>
                                        <li>Desconto por antecipação</li>
                                    </ul>
                                </div>
                                <input type="hidden" name="cupom" value="<?php echo $cupom ?>">
                                <input type="hidden" name="oferta" value="std">
                                <input type="hidden" name="carro" value="1">
                                <input type="hidden" name="valor" value="<?php echo $carro[1]->getDiaria() ?>">
                                <input type="hidden" name="local-retirada" value=" <?php echo $local_retirada ?>">
                                <input type="hidden" name="data-retirada" value=" <?php echo $data_retirada ?>">
                                <input type="hidden" name="hora-retirada" value=" <?php echo $hora_retirada ?>">
                                <input type="hidden" name="local-devolucao" value=" <?php echo $local_devolucao ?>">
                                <input type="hidden" name="data-devolucao" value=" <?php echo $data_devolucao ?>">
                                <input type="hidden" name="hora-devolucao" value=" <?php echo $hora_devolucao ?>">
                            </div>
                        </div>
                    </button>
                </form>
                <form action="resumo.php" method="post">
                    <button type="submit">
                        <div class="oferta">
                            <div class="oferta-content">
                                <h2>Oferta Plus</h2>
                                <h2 class="desconto"><?php echo $carro[1]->desconto($carro[1]->getCupom()) ?></h2>
                                <div class="content-flex">
                                    <h1 class="valor">R$ <?php echo $carro[1]->getDiaria() + 20 ?></h1>
                                    <ul>
                                        <li>KM livre</li>
                                        <li>Desconto por antecipação</li>
                                        <li>Proteção do Carro + Cobertura para Terceiros</li>
                                    </ul>
                                </div>
                                <input type="hidden" name="cupom" value="<?php echo $cupom ?>">
                                <input type="hidden" name="carro" value="1">
                                <input type="hidden" name="oferta" value="plus">
                                <input type="hidden" name="valor" value="<?php echo $carro[1]
                                                                                ->getDiaria() + 20 ?>">
                                <input type="hidden" name="local-retirada" value=" <?php echo $local_retirada ?>">
                                <input type="hidden" name="data-retirada" value=" <?php echo $data_retirada ?>">
                                <input type="hidden" name="hora-retirada" value=" <?php echo $hora_retirada ?>">
                                <input type="hidden" name="local-devolucao" value=" <?php echo $local_devolucao ?>">
                                <input type="hidden" name="data-devolucao" value=" <?php echo $data_devolucao ?>">
                                <input type="hidden" name="hora-devolucao" value=" <?php echo $hora_devolucao ?>">
                            </div>
                        </div>
                    </button>
                </form>
        </fieldset>
        <fieldset>
            <section class="carro">
                <h2><?php echo 'Grupo ' . $carro[2]->getGrupo() ?></h2>
                <h3><?php echo $carro[2]->getMarca(), ' ', $carro[2]->getModelo() ?></h3>
                <img src="imagem/Renault_KWID.png" class="img-carro" alt="">
                <form action="resumo.php" method="post">
                    <button type="submit">
                        <div class="oferta">
                            <div class="oferta-content">
                                <h2>Oferta standard</h2>
                                <h2 class="desconto"><?php echo $carro[2]->desconto($carro[2]->getCupom()) ?></h2>
                                <div class="content-flex">
                                    <h1 class="valor">R$ <?php echo $carro[2]->getDiaria() ?></h1>
                                    <ul>
                                        <li>KM livre</li>
                                        <li>Desconto por antecipação</li>
                                    </ul>
                                </div>
                                <input type="hidden" name="cupom" value="<?php echo $cupom ?>">
                                <input type="hidden" name="carro" value="2">
                                <input type="hidden" name="oferta" value="std">
                                <input type="hidden" name="valor" value="<?php echo $carro[2]->getDiaria() ?>">
                                <input type="hidden" name="local-retirada" value=" <?php echo $local_retirada ?>">
                                <input type="hidden" name="data-retirada" value=" <?php echo $data_retirada ?>">
                                <input type="hidden" name="hora-retirada" value=" <?php echo $hora_retirada ?>">
                                <input type="hidden" name="local-devolucao" value=" <?php echo $local_devolucao ?>">
                                <input type="hidden" name="data-devolucao" value=" <?php echo $data_devolucao ?>">
                                <input type="hidden" name="hora-devolucao" value=" <?php echo $hora_devolucao ?>">
                            </div>
                        </div>
                    </button>
                </form>
                <form action="resumo.php" method="post">
                    <button type="submit">
                        <div class="oferta">
                            <div class="oferta-content">
                                <h2>Oferta Plus</h2>
                                <h2 class="desconto"><?php echo $carro[2]->desconto($carro[2]->getCupom()) ?></h2>
                                <div class="content-flex">
                                    <h1 class="valor">R$ <?php echo $carro[2]->getDiaria() + 20 ?></h1>
                                    <ul>
                                        <li>KM livre</li>
                                        <li>Desconto por antecipação</li>
                                        <li>Proteção do Carro + Cobertura para Terceiros</li>
                                    </ul>
                                </div>
                                <input type="hidden" name="cupom" value="<?php echo $cupom ?>">
                                <input type="hidden" name="carro" value="2">
                                <input type="hidden" name="oferta" value="plus">
                                <input type="hidden" name="valor" value="<?php echo $carro[2]
                                                                                ->getDiaria() + 20 ?>">
                                <input type="hidden" name="local-retirada" value=" <?php echo $local_retirada ?>">
                                <input type="hidden" name="data-retirada" value=" <?php echo $data_retirada ?>">
                                <input type="hidden" name="hora-retirada" value=" <?php echo $hora_retirada ?>">
                                <input type="hidden" name="local-devolucao" value=" <?php echo $local_devolucao ?>">
                                <input type="hidden" name="data-devolucao" value=" <?php echo $data_devolucao ?>">
                                <input type="hidden" name="hora-devolucao" value=" <?php echo $hora_devolucao ?>">
                            </div>
                        </div>
                    </button>
                </form>
        </fieldset>
        <fieldset>
            <section class="carro">
                <h2><?php echo  'Grupo ' . $carro[3]->getGrupo() ?></h2>
                <h3><?php echo $carro[2]->getMarca(), ' ', $carro[3]->getModelo() ?></h3>
                <img src="imagem/Renault-sandero.png" class="img-carro" alt="">
                <form action="resumo.php" method="post">
                    <button type="submit">
                        <div class="oferta">
                            <div class="oferta-content">
                                <h2>Oferta standard</h2>
                                <h2 class="desconto"><?php echo $carro[3]->desconto($carro[3]->getCupom()) ?></h2>
                                <div class="content-flex">
                                    <h1 class="valor">R$ <?php echo $carro[3]->getDiaria() ?></h1>
                                    <ul>
                                        <li>KM livre</li>
                                        <li>Desconto por antecipação</li>
                                    </ul>
                                </div>
                                <input type="hidden" name="cupom" value="<?php echo $cupom ?>">
                                <input type="hidden" name="carro" value="3">
                                <input type="hidden" name="oferta" value="std">
                                <input type="hidden" name="valor" value="<?php echo $carro[3]->getDiaria() ?>">
                                <input type="hidden" name="local-retirada" value=" <?php echo $local_retirada ?>">
                                <input type="hidden" name="data-retirada" value=" <?php echo $data_retirada ?>">
                                <input type="hidden" name="hora-retirada" value=" <?php echo $hora_retirada ?>">
                                <input type="hidden" name="local-devolucao" value=" <?php echo $local_devolucao ?>">
                                <input type="hidden" name="data-devolucao" value=" <?php echo $data_devolucao ?>">
                                <input type="hidden" name="hora-devolucao" value=" <?php echo $hora_devolucao ?>">
                            </div>
                        </div>
                    </button>
                </form>
                <form action="resumo.php" method="post">
                    <button type="submit">
                        <div class="oferta">
                            <div class="oferta-content">
                                <h2>Oferta Plus</h2>
                                <h2 class="desconto"><?php echo $carro[3]->desconto($carro[3]->getCupom()) ?></h2>
                                <div class="content-flex">
                                    <h1 class="valor">R$ <?php echo $carro[3]->getDiaria() + 20 ?></h1>
                                    <ul>
                                        <li>KM livre</li>
                                        <li>Desconto por antecipação</li>
                                        <li>Proteção do Carro + Cobertura para Terceiros</li>
                                    </ul>
                                </div>
                                <input type="hidden" name="cupom" value="<?php echo $cupom ?>">
                                <input type="hidden" name="carro" value="3">
                                <input type="hidden" name="oferta" value="plus">
                                <input type="hidden" name="valor" value="<?php echo $carro[3]
                                                                                ->getDiaria() + 20 ?>">
                                <input type="hidden" name="local-retirada" value=" <?php echo $local_retirada ?>">
                                <input type="hidden" name="data-retirada" value=" <?php echo $data_retirada ?>">
                                <input type="hidden" name="hora-retirada" value=" <?php echo $hora_retirada ?>">
                                <input type="hidden" name="local-devolucao" value=" <?php echo $local_devolucao ?>">
                                <input type="hidden" name="data-devolucao" value=" <?php echo $data_devolucao ?>">
                                <input type="hidden" name="hora-devolucao" value=" <?php echo $hora_devolucao ?>">
                            </div>
                        </div>
                    </button>
                </form>
        </fieldset>
    </section>
</body>

</html>