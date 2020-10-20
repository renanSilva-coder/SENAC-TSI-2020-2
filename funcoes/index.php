<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

function operacao(  float $num1, 
                    float $num2/*parametro obrigatorio*/,
                    string $operacao = '+'/*parametro não obrigatorio*/): ?float//pede para retornar float, senão ele retorna o default;
{
    switch ($operacao){
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
        case 'x':
            return $num1 * $num2;
        case '/':
            return $num1 / $num2;
        default:
        return '0.0';
    }
}

echo 'O Resultado é: '.operacao(45,2,'+').'<br>';
echo 'O Resultado é: '.operacao(45,2,'-').'<br>';
echo 'O Resultado é: '.operacao(45,2,'x').'<br>';
echo 'O Resultado é: '.operacao(45,2,'/').'<br>';
echo '<br>';
/*function dayWeek (int $num){
    switch ($num){
        case 0:
            return 'Domingo';
        case 1:
            return 'Segunda';
        case 2:
            return 'Terça';
        case 3:
            return 'Quarta';
        case 4:
            return 'Quinta';
        case 5:
            return 'Sexta';
        case 6:
            return 'Sábado';
        default:
            return null;
    }
}
echo 'O dia é: '.dayWeek(1);*/
$dia = 2;//Variável fora do escopo da função;

function dia_da_semana( int $dia ): string
{
    $semana = ['Domingo','Segunda','terça','Quarta','Quinta','Sexta','sábado'];
    return $semana[$dia] ?? 'Use de 0 a 6';//retona o $dia da $semana ??senão, retorna o texto.
}

echo 'O dia da semana é: '.dia_da_semana(6).'<br><br>';

$nome = 'Renan';

function muda_nome(string $var): string //Passagem de parametro por referencia 
//(muda o valor da variável fora do escopo da função);
{
    $var = 'Outro nome';
    return $var;
}
echo "A função retornará: ".muda_nome($nome).'<br><br>';
echo "A variável \$nome ainda vale: \"$nome\" <br><br>";

function exemplo( $param1 , $param2)
{
    return 'Isso tbm funciona';
}

