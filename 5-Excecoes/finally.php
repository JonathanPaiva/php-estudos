<?php

//Exemplos de uso de Try - Catch - Finally

try  {
    echo "Executando " . PHP_EOL;
    //throw new Exception('Exceção aqui');
} catch (Throwable $e) {
    echo "Caindo no catch" . PHP_EOL;
} finally {
    echo "Finally" . PHP_EOL;
}



$arquivo = fopen('php://temp', 'w');

try  {
    fwrite($arquivo, 'Qualquer coisa');
    //throw new Exception('Exceção aqui');
} catch (Throwable $e) {
    echo "Erro ao escrever no arquivo" . PHP_EOL;
} finally {
    echo "Finally" . PHP_EOL;
}
fclose($arquivo);



function a(): int
{
    try {
        echo "Código";
        return 0;
    } catch (Throwable $e) {
        echo "Problema";
        return 1;
    } finally {
        echo "Final da função";
    }
}

a();