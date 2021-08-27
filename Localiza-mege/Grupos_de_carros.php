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
    session_start();

    $cliNome = $_POST['nome'];
    $cliEmail = $_POST['email'];
    $cliCPF = $_POST['cpf'];
    $cliNumero = $_POST['numero'];
    $cupom = $_POST['cupom'];

    $_SESSION['nome'] = $cliNome;
    $_SESSION['email'] = $cliEmail;
    $_SESSION['cpf'] = $cliCPF;
    $_SESSION['numero'] = $cliNumero;

    $local_retirada = $_POST['local-retirada'];
    $data_retirada = $_POST['data-retirada'];
    $hora_retirada = $_POST['hora-retirada'];

    $local_devolucao = $_POST['local-devolucao'];
    $data_devolucao = $_POST['data-devolucao'];
    $hora_devolucao = $_POST['hora-devolucao'];

    $_SESSION['local-retirada'] = $local_retirada;
    $_SESSION['data-retirada'] = $data_retirada;
    $_SESSION['hora-retirada'] = $hora_retirada;

    $_SESSION['local-devolucao'] = $local_devolucao;
    $_SESSION['data-devolucao'] = $data_devolucao;
    $_SESSION['hora-devolucao'] = $hora_devolucao;

    require_once 'Classes/Carro.php';


    if (isset($local_retirada, $local_devolucao, $data_retirada, $data_devolucao, $hora_retirada, $hora_devolucao)) {

        require_once 'carros.php';
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
        text-decoration: underline;
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
                            </div>
                        </div>
                    </button>
                </form>
        </fieldset>
    </section>
</body>

</html>