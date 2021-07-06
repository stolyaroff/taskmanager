<?php
include $_SERVER['DOCUMENT_ROOT'] . '/controller/mainMenu.php';
include $_SERVER['DOCUMENT_ROOT'] . '/controller/sectionName.php';

function cutString($line, $length = 12, $appends = '...'): string
{
    return mb_strimwidth($line, 0, $length, $appends);
}

function arraySort(array $array, $key = 'sort', $sort = SORT_ASC): array
{
    $key  = array_column($array, $key);
    array_multisort($key, $sort, $array);
    return $array;
}

// Сортировка меню для хедера
$ulHeader = 'main-menu';

// Сортировка меню для футера
$ulFooter = 'main-menu bottom';

function showMenu($arrayMenu, $sortBy, $sortKey, $ulClass = 'class="main-menu"'){

    $mainMenu = arraySort($arrayMenu, $sortKey, $sortBy);

    include $_SERVER['DOCUMENT_ROOT'] . '/templates/listMenu.php';

    return $mainMenu;
}