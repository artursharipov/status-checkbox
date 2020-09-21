<?php

namespace common\components\statusCheckbox;
use Yii;
use yii\base\Widget;
use yii\web\View;
use yii\helpers\Url;

class StatusColumn
{
    
    public static function switch($fieldName, $array_idsDisabled = false)
    {

        StatusAsset::register(Yii::$app->view);
        
        return [
            'class' => 'common\components\statusCheckbox\models\SwitchCheckboxColumn',
            'header' => 'Статус',
            'checkboxOptions' => function ($model, $key, $index, $column) use ($fieldName, $array_idsDisabled) {

               $options['onclick'] = "changeColumn('". Url::to([Yii::$app->controller->id . '/change-column', 'fieldName' => $fieldName,'id' => $model->id]) ."')";

               $options['checked'] = $model->{$fieldName} ? true : false;

               if(is_array($array_idsDisabled)){
                    if(array_search($model->id, $array_idsDisabled) !== false){
                        $options['disabled'] = true;
                    }
               }
               
               return $options;
            }
        ];
    }
    
    public static function checkbox($fieldName)
    {
        
        StatusAsset::register(Yii::$app->view);
        
        return [
            'class' => 'yii\grid\CheckboxColumn',
            'header' => 'Статус',
            'checkboxOptions' => function ($model, $key, $index, $column) {

               $options['onclick'] = 'myStatus(' . $model->id . ',"'. Yii::$app->controller->module->id .'","'. Yii::$app->controller->id .'")';

               $options['checked'] = $model->status ? true : false;

               $options['disabled'] = ($model->id == 1 && Yii::$app->controller->module->id == 'admin') ? true : false;

               return $options;
            }
        ];
    }
}

?>