<?php

use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

Loc::loadMessages(__FILE__);

$arComponentDescription = array(
    'NAME' => Loc::getMessage('GTS_NAME'),
    'DESCRIPTION' => Loc::getMessage('GTS_DESCRIPTION'),
    'PATH' => array(
        'ID' => 'gt',
        'NAME' => Loc::getMessage('GTS_PATH_NAME'),
        'CHILD' => array(
            'ID' => 'content',
            'NAME' => Loc::getMessage('GTS_PATH_CHILD_NAME'),
        ),
    ),
);
