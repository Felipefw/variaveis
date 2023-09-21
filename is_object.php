<?php   
    // variável do tipo String
    $nome = 'Meu nome 123';
    echo "A variável \$nome é um objeto? " . (is_object($nome) ? 'Sim' : 'Não') . "<br>";

    // variável do tipo inteiro
    $ano = 2023;
    echo "A variável \$ano é um objeto? " . (is_object($ano) ? 'Sim' : 'Não') . "<br>";

    // variável do tipo float 
    $pi = 3.14159265; // Troque a vírgula por ponto
    echo "A variável \$pi é um objeto? " . (is_object($pi) ? 'Sim' : 'Não') . "<br>";

    // variável do tipo booleano
    $sim = true;
    echo "A variável \$sim é um objeto? " . (is_object($sim) ? 'Sim' : 'Não') . "<br>";

    // variável do tipo objeto
    $objeto = new stdClass();
    echo "A variável \$objeto é um objeto? " . (is_object($objeto) ? 'Sim' : 'Não') . "<br>";
?>
