<?php 
// Tipos de dados do PHP

//BÁSICOS
$nome = "Maurizan";
$site = 'www.itaprint.com.br';

$ano = 1983;
$salario = 5500.99;
$bloqueado = false;

//COMPOSTO
$frutas = array('abacaxi', 'laranja', 'manga');
//echo $frutas [2];

$nascimento = new DateTime();

//var_dump($nascimento);

#ESPECIAIS
$arquivo = fopen("exemplo3.php", "r");
var_dump($arquivo);

$nulo = NULL; //Não existe, total ausência de valor. Quando vc destroi uma variável, ela é nulo. 
$vazio = ""; //A variácel existe, foi reservado, só não tem valor.





 ?>