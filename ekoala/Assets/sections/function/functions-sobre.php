<?php

function explodeTitle($arg){
    
    $explode = explode("-", $arg);
    
    $array = array(
        'titulo' => $explode[0],
        'subtitulo' => $explode[1]
    );

    return $array;
}