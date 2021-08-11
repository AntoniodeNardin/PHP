<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
<?php
require_once 'Pessoa.php';
require_once 'Visitante.php';
require_once 'Aluno.php';
require_once 'Bolsista.php';
require_once 'Funcionario.php';
require_once 'Professor.php';
require_once 'Técnico.php';

$v[0] = new Visitante('rafa',11,'f');
$a[0] = new Aluno('toni',19,'m',2021,'CC',2000);
$b[0] = new Bolsista('rafael',20,'m',2020,'EE',2500,0.5);
$f[0] = new Funcionario('enzo',18,'m','voley','sim');
$pf[0] = new Professor('Eric',21,'m','voley',2000);
$t[0] = new Técnico('Vithoria',16,'f',2021,'Patins',2500,123);

echo "<br>";
print_r($a[0]);
echo "<br>";
$f[0]->MudarTrabalho('Cantor');
print_r($f[0]);
echo "<br>";
$pf[0]->ReceberAumento(500);
print_r($pf[0]);
print_r($b[0]);
$b[0]->pagarMensalidade();
print_r($t[0]);
?>
</pre>
</body>
</html>
