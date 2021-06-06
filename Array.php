<?php

$funcionarios = [
   ["nome" => "Alex", "idade" => 21, "salario" => 1285.27, "ativo" => true],
   ["nome" => "Emerson", "idade" => 35, "salario" => 3885.27, "ativo" => false],
   ["nome" => "Osvaldo", "idade" => 54, "salario" => 5285.27, "ativo" => true],
   ["nome" => "Robson", "idade" => 26, "salario" => 3285.27, "ativo" => true],
];

$bonificacao = 10;

foreach($funcionarios as $funcionario){
    if($funcionario["ativo"]){
     $funcionario["salario"] += $funcionario["salario"] * ($bonificacao/100);

     echo "Funcionario: {$funcionario['nome']} - {$funcionario['salario']}\n";
    } else {
     echo "Funcionario: {$funcionario['nome']} - INATIVO\n";
    }
} 