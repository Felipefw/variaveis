<?php   
    // variável do tipo String
    $nome = 'Wilbert';
    echo "A variável \$nome é inteira? " . (is_integer($nome) ? 'Sim' : 'Não') . "<br>";

    // variável do tipo inteiro
    $ano = 2023;
    echo "A variável \$ano é inteira? " . (is_integer($ano) ? 'Sim' : 'Não') . "<br>";

    // variável do tipo float 
    $pi = 3.14159265; // Troque a vírgula por ponto
    echo "A variável \$pi é inteira? " . (is_integer($pi) ? 'Sim' : 'Não') . "<br>";

    // variável do tipo booleano
    $sim = true;
    echo "A variável \$sim é inteira? " . (is_integer($sim) ? 'Sim' : 'Não') . "<br>";
?>
