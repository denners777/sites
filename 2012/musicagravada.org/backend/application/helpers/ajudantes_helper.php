<?php

function getPessoas($idAUTOR) {
    $CI = &get_instance();
    $R = $CI->pessoa->get($idAUTOR);
    unset($CI);
    if (empty($R)) {
        return '<b class="label label-important">Inválido</b>';
    } else {
        return $R[0][Pessoa::NOME];
    }
}

function getVariavel($idgenero) {
    $CI = &get_instance();
    $R = $CI->variavel->get($idgenero);
    unset($CI);
    if (empty($R)) {
          return '<b class="label label-important">Inválido</b>';
    } else {
        return $R[0][Variavel::NOME];
    }
}