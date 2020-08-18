<?php

namespace common\components\status;

use yii\web\AssetBundle;

class StatusAsset extends AssetBundle
{
    public $sourcePath = '@common/components/status/assets';

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