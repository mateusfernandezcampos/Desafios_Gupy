<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Inverter String</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <form name="form" action="" method="get">
            Digite o texto a ser invertido aqui: <input type="text" name="texto" id="texto" value="">
            <button type="submit">INVERTER</button>
        </form>

        <?php 
            //Pegando o valor do texto digitado no input
            $txt =  $_GET['texto'];

            //Utilizando o metodo strlen para pegar o tamanho da palavra e transformar em um int
            $tam = strlen($txt);

            echo "<br><b>Texto invertido: </b>";

            /*Utilizando um for com a lógica de diminuir 1 do int do tamanho da palavra enquanto for maior ou igual a zero
             diminuindo o indicador $i a cada loop até o int da variavel $tam chegar a 0, significando que acabou a palavra
             o echo vai digitando letra por letra a cada loop.
            */
            for ($i=($tam-1) ; $i >= 0 ; $i--)   
                {  
                echo $txt[$i];  
                }  
                            
        ?>
    </body>
</html>
