<?php

namespace common\components\statusCheckbox;
use Yii;
use yii\base\Widget;
use yii\web\View;
use yii\helpers\Html;
use yii\helpers\Url;

class Status
{
    
    public static function column($type, $fieldName, $array_idsDisabled = false)
    {        

        StatusAsset::register(Yii::$app->view);
        
        return [

            'attribute' => $fieldName,

            'format' => 'raw',

            'value' => function ($data) use ($type, $fieldName, $array_idsDisabled) {
                
                if(is_array($array_idsDisabled)){

                    $isDisabled = array_search($data->id, $array_idsDisabled) !== false ? true : false;

                }

                $html = Html::activeCheckbox($data, $fieldName, [

                    'label' => false,

                    'checked' => $data->{$fieldName} ? true : false,

                    'disabled' => $isDisabled,                    

                    'onclick' => "changeColumn('". Url::to([
                        Yii::$app->controller->id . '/change-column', 
                        'fieldName' => $fieldName,
                        'id' => $data->id
                    ]) ."')"

                ]);

                //checkbox or switch
                if($type == 'switch'){

                    return '<div class="switch">
                                <label>'
                                    . $html .
                                    '<span class="lever"></span>
                                </label>
                            </div>';

                }else{

                    return $html;

                }

            },

        ];
    }

    public static function statusTemplate($title = 'Статус')
    {
        StatusAsset::register(Yii::$app->view);

        return [
            'template' => 
                "<div class='switch'>
                    <label>{$title} 
                        {input}
                        <span class='lever'></span>
                    </label>
                </div>\n{error}"
        ];
    }
    
}

?>