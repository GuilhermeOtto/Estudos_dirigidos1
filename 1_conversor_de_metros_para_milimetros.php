<?php

print "\n Digite o valor (em metros) para ser convertido em milímetros:  ";
$valor = (float) fgets(STDIN); 

$valor_original = $valor;
$valor = $valor * 1000;

print "\n\n   $valor_original metro(s) após a conversão correspondem à $valor milímetro(s)  ";
