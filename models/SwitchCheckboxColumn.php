<?php

namespace common\components\status\models;

class SwitchCheckboxColumn extends \yii\grid\CheckboxColumn
{
    protected function renderDataCellContent($model, $key, $index)
    {
        return 
            '<div class="switch">
                <label>'
                    . parent::renderDataCellContent($model, $key, $index) .
                    '<span class="lever"></span>
                </label>
            </div>';
    }
}

?>