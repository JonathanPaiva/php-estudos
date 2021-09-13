<?php

for ($i = 1; $i <=100;$i++){

    //podem ser feitos inicialmente de duas maneiras
    if ($i % 2 != 0 ){
        echo "#$i" . PHP_EOL;
    }
    //----------------------------------------------
    if ($i % 2 == 0 ){
        continue;
    }
    //----------------------------------------------
    
    echo "#$i" . PHP_EOL;
}