<?php   
    // variável do tipo String
    $nome = 'Meu nome 123';
    echo "A variável \$nome é uma string? " . (is_string($nome) ? 'Sim' : 'Não') . "<br>";

    // variável do tipo inteiro
    $ano = 2023;
    echo "A variável \$ano é uma string? " . (is_string($ano) ? 'Sim' : 'Não') . "<br>";

    // variável do tipo float 
    $pi = 3.14159265; // Troque a vírgula por ponto
    echo "A variável \$pi é uma string? " . (is_string($pi) ? 'Sim' : 'Não') . "<br>";

    // variável do tipo booleano
    $sim = true;
    echo "A variável \$sim é uma string? " . (is_string($sim) ? 'Sim' : 'Não') . "<br>";
?>
