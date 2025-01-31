<?php

//Entrada
$curso = readline ("Qual nome do curso: ");
$cargaHoraria = readline ("Qual a carga horaria? ");

//Processamento

$faltasPermitidas = $cargaHoraria * 0.25;

//Saída
//echo "O " .$curso ."a " .$cargaHoraria. " com limite "  .$faltasPermitidas;

echo "\nCurso: ".$curso."\n";
echo "\nCarga Horaria: ".$cargaHoraria. "h \n";
echo "Limite de faltas: ".$faltasPermitidas."h";

// \n é usado para criar "quebras", ou novas linhas" dentro de uma saída de texto


