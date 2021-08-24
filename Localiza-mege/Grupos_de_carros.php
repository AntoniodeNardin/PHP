<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<style>
    .container{
        padding: 0px 0px;
    }
    input{
        margin: 10px;
        padding: 10px;
    }
    .resumo > h2{
    background-color: #004A33;
    border-radius: 6px 6px 0px 0px;
    padding: 20px;
    color:#fff;
    text-align: center;
    font-size: 18px;
}
.resumo > h3{
    color: #4DAC6D;
    margin-left: 10px;
}
.resumo > h4,p{
    margin-left: 10px;
}
.resumo{
    box-shadow: 0 5px 14px 0px #151313ab;
    padding-bottom: 10px;
    border-radius: 4px;
    margin: 0 auto;
    width: 400px;
} 
.oferta-content{
    padding: 10px 20px;
}
.oferta{
    margin: 10px;
    margin-top: 10px;
    box-shadow: 0px 0px 6px #000010;

}
header>h1{
  padding: 35px;
  color: white;
}
header{
    height: 120px;
    margin-top: -50px;
    background-color: #009849;
}
h1{
    margin-left: 20px;
}
body{
margin: 0px;
padding: 0px;
}
.oferta :hover{
    background-color: #009849;
    border-radius: 10px;
    color: white;
}
fieldset{
    border: 0.5px solid gray;
}
body{
    font-size: 1.1em;
}
</style>
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

        
    if(isset($local_retirada,$local_devolucao,$data_retirada,$data_devolucao,$hora_retirada,$hora_devolucao)){

        $carro[1] = new Carro('Argo','Fiat','Branco',1.2,true,150,'A');
        $carro[2] = new Carro('Kwid','Renault','Bege',1.0,true,130,'B');
        $carro[3] = new Carro('Sandero','Renault','Azul',1.6,true,180,'C');
        $cliente[1] = new Cliente($cliNome,$cliCPF,$cliEmail,$cliNumero);
        }

    ?>
</pre>
<body>
<header>
          <h1>Localiza-Mege</h1>
        </header>
        <h1>Selecione o melhor carro para você</h1>

        <section class="flex">
        <fieldset class= "card" >
            <section class="carro">
                    <h3><?php echo 'Grupo '.$carro[1]->getGrupo() ?></h3>
                    <h4><?php echo $carro[1]->getMarca(),' ', $carro[1]->getModelo() ?></h4>
                    <img src="imagem/Fiat-argo.png" class = "img-carro" alt=""  >
                    <form action="resumo.php" method="post">
                        <button type="submit">
                        <div class="oferta">
                            <div class="oferta-content">
                                <h2>Oferta standard</h2>
                                    <div class="content-flex">
                                        <h1>R$ <?php echo $carro[1]->getAluguel()?></h1>
                                        <ul>
                                            <li>KM livre</li>
                                            <li>Desconto por antecipação</li>
                                        </ul>
                                    </div>
                                    <input type="hidden" name="cupom" value="<?php echo $cupom ?>">
                                    <input type="hidden" name="oferta" value="std">
                                    <input type="hidden" name="carro" value="1">
                                    <input type="hidden" name="valor" value="<?php echo $carro[1]->getAluguel()?>">
                                    <input type="hidden" name="local-retirada" value=" <?php echo $local_retirada?>">
                                    <input type="hidden" name="data-retirada" value=" <?php echo $data_retirada?>">
                                    <input type="hidden" name="hora-retirada" value=" <?php echo $hora_retirada?>">
                                    <input type="hidden" name="local-devolucao" value=" <?php echo $local_devolucao?>">
                                    <input type="hidden" name="data-devolucao" value=" <?php echo $data_devolucao?>">
                                    <input type="hidden" name="hora-devolucao" value=" <?php echo $hora_devolucao?>">
                                    </div>
                                    </div>
                                    </button>
                                    </form>
                                    <form action="resumo.php" method="post">
                                        <button type="submit">
                                    <div class="oferta">
                                        <div class="oferta-content">
                                    <h2>Oferta Plus</h2>
                                    <div class="content-flex">
                                        <h1>R$ <?php echo $carro[1]->getAluguel()+20?></h1>
                                        <ul>
                                            <li>KM livre</li>
                                            <li>Desconto por antecipação</li>
                                        </ul>
                                    </div>
                                    <input type="hidden" name="cupom" value="<?php echo $cupom ?>">
                                    <input type="hidden" name="carro" value="1">
                                    <input type="hidden" name="oferta" value="plus">
                                    <input type="hidden" name="valor" value="<?php echo $carro[1]
                                    ->getAluguel()+20?>">
                                     <input type="hidden" name="local-retirada" value=" <?php echo $local_retirada?>">
                                    <input type="hidden" name="data-retirada" value=" <?php echo $data_retirada?>">
                                    <input type="hidden" name="hora-retirada" value=" <?php echo $hora_retirada?>">
                                    <input type="hidden" name="local-devolucao" value=" <?php echo $local_devolucao?>">
                                    <input type="hidden" name="data-devolucao" value=" <?php echo $data_devolucao?>">
                                    <input type="hidden" name="hora-devolucao" value=" <?php echo $hora_devolucao?>">
                                </div>
                                </div>
                                </button>
                                </form>
        </fieldset>
                            <fieldset>
                                <section class="carro">
                                                <h3><?php echo 'Grupo '.$carro[2]->getGrupo() ?></h3>
                                                <h4><?php echo $carro[2]->getMarca(),' ',$carro[2]->getModelo() ?></h4>
                                                <img src="imagem/Renault_KWID.png" class = "img-carro" alt=""  >
                                                <form action="resumo.php" method="post">
                                                    <button type="submit">
                                                    <div class="oferta">
                                                        <div class="oferta-content">
                                <h2>Oferta standard</h2>
                                <div class="content-flex">
                                        <h1>R$ <?php echo $carro[2]->getAluguel()?></h1>
                                        <ul>
                                            <li>KM livre</li>
                                            <li>Desconto por antecipação</li>
                                        </ul>
                                    </div>
                                    <input type="hidden" name="cupom" value="<?php echo $cupom ?>">
                                    <input type="hidden" name="carro" value="2">
                                    <input type="hidden" name="oferta" value="std">
                                    <input type="hidden" name="valor" value="<?php echo $carro[2]->getAluguel()?>">
                                    <input type="hidden" name="local-retirada" value=" <?php echo $local_retirada?>">
                                    <input type="hidden" name="data-retirada" value=" <?php echo $data_retirada?>">
                                    <input type="hidden" name="hora-retirada" value=" <?php echo $hora_retirada?>">
                                    <input type="hidden" name="local-devolucao" value=" <?php echo $local_devolucao?>">
                                    <input type="hidden" name="data-devolucao" value=" <?php echo $data_devolucao?>">
                                    <input type="hidden" name="hora-devolucao" value=" <?php echo $hora_devolucao?>">
                                    </div>
                                    </div>
                                    </button>
                                    </form>
                                    <form action="resumo.php" method="post">
                                        <button type="submit">
                                    <div class="oferta">
                                        <div class="oferta-content">
                                    <h2>Oferta Plus</h2>
                                    <div class="content-flex">
                                        <h1>R$ <?php echo $carro[2]->getAluguel()+20?></h1>
                                        <ul>
                                            <li>KM livre</li>
                                            <li>Desconto por antecipação</li>
                                        </ul>
                                    </div>
                                    <input type="hidden" name="cupom" value="<?php echo $cupom ?>">
                                    <input type="hidden" name="carro" value="2">
                                    <input type="hidden" name="oferta" value="plus">
                                    <input type="hidden" name="valor" value="<?php echo $carro[2]
                                    ->getAluguel()+20?>">
                                     <input type="hidden" name="local-retirada" value=" <?php echo $local_retirada?>">
                                    <input type="hidden" name="data-retirada" value=" <?php echo $data_retirada?>">
                                    <input type="hidden" name="hora-retirada" value=" <?php echo $hora_retirada?>">
                                    <input type="hidden" name="local-devolucao" value=" <?php echo $local_devolucao?>">
                                    <input type="hidden" name="data-devolucao" value=" <?php echo $data_devolucao?>">
                                    <input type="hidden" name="hora-devolucao" value=" <?php echo $hora_devolucao?>">
                                </div>
                                </div>
                                </button>
                                </form>
                            </fieldset>
                            <fieldset>
                                <section class="carro">
                                                <h3><?php echo  'Grupo '.$carro[3]->getGrupo() ?></h3>
                                                <h4><?php echo $carro[2]->getMarca(),' ', $carro[3]->getModelo() ?></h4>
                                                <img src="imagem/Renault-sandero.png" class = "img-carro" alt=""  >
                                                <form action="resumo.php" method="post">
                                                    <button type="submit">
                                                    <div class="oferta">
                                                        <div class="oferta-content">
                                <h2>Oferta standard</h2>
                                <div class="content-flex">
                                        <h1>R$ <?php echo $carro[3]->getAluguel()?></h1>
                                        <ul>
                                            <li>KM livre</li>
                                            <li>Desconto por antecipação</li>
                                        </ul>
                                    </div>
                                    <input type="hidden" name="cupom" value="<?php echo $cupom ?>">
                                    <input type="hidden" name="carro" value="3">
                                    <input type="hidden" name="oferta" value="std">
                                    <input type="hidden" name="valor" value="<?php echo $carro[3]->getAluguel()?>">
                                    <input type="hidden" name="local-retirada" value=" <?php echo $local_retirada?>">
                                    <input type="hidden" name="data-retirada" value=" <?php echo $data_retirada?>">
                                    <input type="hidden" name="hora-retirada" value=" <?php echo $hora_retirada?>">
                                    <input type="hidden" name="local-devolucao" value=" <?php echo $local_devolucao?>">
                                    <input type="hidden" name="data-devolucao" value=" <?php echo $data_devolucao?>">
                                    <input type="hidden" name="hora-devolucao" value=" <?php echo $hora_devolucao?>">
                                    </div>
                                    </div>
                                    </button>
                                    </form>
                                    <form action="resumo.php" method="post">
                                        <button type="submit">
                                    <div class="oferta">
                                        <div class="oferta-content">
                                    <h2>Oferta Plus</h2>
                                    <div class="content-flex">
                                        <h1>R$ <?php echo $carro[3]->getAluguel()+20?></h1>
                                        <ul>
                                            <li>KM livre</li>
                                            <li>Desconto por antecipação</li>
                                        </ul>
                                    </div>
                                    <input type="hidden" name="cupom" value="<?php echo $cupom ?>">
                                    <input type="hidden" name="carro" value="3">
                                    <input type="hidden" name="oferta" value="plus">
                                    <input type="hidden" name="valor" value="<?php echo $carro[3]
                                    ->getAluguel()+20?>">
                                     <input type="hidden" name="local-retirada" value=" <?php echo $local_retirada?>">
                                    <input type="hidden" name="data-retirada" value=" <?php echo $data_retirada?>">
                                    <input type="hidden" name="hora-retirada" value=" <?php echo $hora_retirada?>">
                                    <input type="hidden" name="local-devolucao" value=" <?php echo $local_devolucao?>">
                                    <input type="hidden" name="data-devolucao" value=" <?php echo $data_devolucao?>">
                                    <input type="hidden" name="hora-devolucao" value=" <?php echo $hora_devolucao?>">
                                </div>
                                </div>
                                </button>
                                </form>
                            </fieldset>
        </section>
</body>
</html>