<?php

    $value = [];
    $value [0][1] = "01 Arif  ";
    $value [0][2] = "02 Saidul ";
    $value [0][3] = "03 Towhid ";
    $value [0][4] = "04 Nahid ";

    $value [1][1] = "01 Akib ";
    $value [1][2] = "02 Raju ";
    $value [1][3] = "03 Emam ";
    $value [1][4] = "04 Borhan ";

    $value [2][1] = "01 Hasem ";
    $value [2][2] = "02 Riyad ";
    $value [2][3] = "03 Omi ";
    $value [2][4] = "04 Shahed ";


    foreach($value as $input){
        foreach($input as $index){
            echo $index;
        }
        echo '<br/>';
    }