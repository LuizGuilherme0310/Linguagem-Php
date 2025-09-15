<?php
//supondo que a variavével &mes recebeu o dado via front-end
$mes = 12;
$genero = 'f';
if  ($mes == 1 || $mes ==7) {
print('Mês de férias '.'<br>');
print('O mês é: '.$mes);
} else {
    print('Trabalho '.'<br>');
    print('falta muito pras férias');
    }


    echo '<br>';
    if ($genero !='f' && $genero != 'f' && $genero != "M" && $genero != "m" && $genero !="o" && $genero !=""){
        print('Sexo inválido - '.$genero);
    }
    else{
        print('Sexo válido - '.$genero);
    }
?>