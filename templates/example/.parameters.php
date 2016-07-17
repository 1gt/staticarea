<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

$arTemplateParameters = array(
    'TITLE' => array(
        'NAME' => 'Название',
        'TYPE' => 'STRING',
        'COLS' => 30,
    ),
    'DESCRIPTION' => array(
        'NAME' => 'Описание',
        'TYPE' => 'STRING',
        'COLS' => 31,
        'ROWS' => 2,
    ),
    'LINK_HREF' => array(
        'NAME' => 'Адрес ссылки',
        'TYPE' => 'STRING',
        'COLS' => 30,
    ),
    'LINK_TITLE' => array(
        'NAME' => 'Заголовок ссылки',
        'TYPE' => 'STRING',
        'COLS' => 30,
    ),
);
