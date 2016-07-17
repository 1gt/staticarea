<?php
namespace Gt\Components;

class Staticarea extends \CBitrixComponent
{
    /**
     * @inheritdoc
     */
    public function executeComponent()
    {
        $this->includeComponentTemplate();
    }
}
