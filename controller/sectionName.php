<?php

function isCurrentUrl($url){
    return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) == $url;
}

function sectionName($array){
    foreach ($array as $value){
        if(isCurrentUrl($value['path'])){
            return $value['title'];
        }
    }
    return 'Страница не найдена';
}