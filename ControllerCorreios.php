<?php
include("ClassCorreios.php");

$cepOrigem=filter_input(INPUT_POST,'cepOrigem',FILTER_SANITIZE_SPECIAL_CHARS);
$cepDestino=filter_input(INPUT_POST,'cepDestino',FILTER_SANITIZE_SPECIAL_CHARS);
$peso=filter_input(INPUT_POST,'peso',FILTER_SANITIZE_SPECIAL_CHARS);
$formato=filter_input(INPUT_POST,'formato',FILTER_SANITIZE_SPECIAL_CHARS);
$comprimento=filter_input(INPUT_POST,'comprimento',FILTER_SANITIZE_SPECIAL_CHARS);
$altura=filter_input(INPUT_POST,'altura',FILTER_SANITIZE_SPECIAL_CHARS);
$largura=filter_input(INPUT_POST,'largura',FILTER_SANITIZE_SPECIAL_CHARS);
$mao=filter_input(INPUT_POST,'mao',FILTER_SANITIZE_SPECIAL_CHARS);
$valorDeclarado=filter_input(INPUT_POST,'valorDeclarado',FILTER_SANITIZE_SPECIAL_CHARS);
$avidoRecebimento=filter_input(INPUT_POST,'avidoRecebimento',FILTER_SANITIZE_SPECIAL_CHARS);
$codigo=filter_input(INPUT_POST,'codigo',FILTER_SANITIZE_SPECIAL_CHARS);
$diametro=filter_input(INPUT_POST,'diametro',FILTER_SANITIZE_SPECIAL_CHARS);


$Correios=new ClassCorreios();
$Correios->pesquisaPrecoPrazo($cepOrigem,$cepDestino,$peso,$formato,$comprimento,$altura,$largura,$mao,$valorDeclarado,$avidoRecebimento,$codigo,$diametro);
?>