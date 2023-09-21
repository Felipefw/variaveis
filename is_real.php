<?php   
    // variável do tipo String
    $nome = 'Wilbert';
    echo "A variável \$nome é real? " . (is_float($nome) ? 'Sim' : 'Não') . "<br>";

    // variável do tipo inteiro
    $ano = 2023;
    echo "A variável \$ano é real? " . (is_float($ano) ? 'Sim' : 'Não') . "<br>";

    // variável do tipo float 
    $pi = 3.14159265; // Troque a vírgula por ponto
    echo "A variável \$pi é real? " . (is_float($pi) ? 'Sim' : 'Não') . "<br>";

    // variável do tipo booleano
    $sim = true;
    echo "A variável \$sim é real? " . (is_float($sim) ? 'Sim' : 'Não') . "<br>";
?>
