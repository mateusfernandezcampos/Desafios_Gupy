<?php
    //Escolhendo um número aleatório
    $numr = mt_rand(1, 100);

    //Definindo as variáveis para a realização da sequência de Fibonacci
    $num1= 0;
    $num2= 1;
    $soma = 0;

    //HTML para demonstrar a sequencia de Fibonacci que continua na linha 15 dentro do do(){
    echo "<b>Fibonacci:</b>";

    /*do(){}while() para realizar a lógica da sequência de Fibonacci:
        Soma os 2 valores de num1 e num2 na variável soma, escreve a variável soma no HTML e após isso substitui os valores de num1 e num2
    */    
    do{
        $soma = $num1 + $num2;
        echo " " . $soma;
        $num1 = $num2;
        $num2 = $soma;
    } while($soma < $numr);

    echo "<br><br>";
    
    //if e else para conferir se o número aleatório está ou não na sequência de Fibonacci
    if($soma != $numr){
        echo "<b>Número aleatório:</b> " . $numr;
        echo "<br>Esse número não está na sequência de Fibonacci.";
    } else {
        echo "<b>Número aleatório:</b> " . $numr;
        echo "<br><b>Esse número está na sequência de Fibonacci!</b>";
        //Deixei o texto afirmando que o número está dentro da sequência para destacar melhor em comparação a quando não está na sequência
    }


?>