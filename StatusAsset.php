<?php

namespace common\components\statusCheckbox;

use yii\web\AssetBundle;

class StatusAsset extends AssetBundle
{
    public $sourcePath = '@common/components/statusCheckbox/assets';

    public $css = [
        'switch.css',
    ];
    
    public $js = [
        'status.js',
    ];

    public $depends = [
        '\yii\web\JqueryAsset',
    ];
}
?>