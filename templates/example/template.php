<?
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @var CBitrixComponentTemplate $this */
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

$this->setFrameMode(true);
?>
<div class="block">
    <div class="block-title"><?= $arParams['TITLE']; ?></div>
    <div class="block-descr"><?= $arParams['DESCRIPTION']; ?></div>
    <div class="block-link">
        <a href="<?= $arParams['LINK_HREF']; ?>"><?= $arParams['LINK_TITLE']; ?></a>
    </div>
</div>
