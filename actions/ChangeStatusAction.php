<?php
namespace common\components\status\actions;
namespace common\components\status\actions;
use yii\base\Action;

use Yii;

class ChangeStatusAction extends Action
{
    public $self;

    public function run()
    {
        $id = Yii::$app->request->get('id');

        $fieldName = Yii::$app->request->get('fieldName');

        $model = $this->self::findOne($id);

        $model->{$fieldName} == 1 ? $model->{$fieldName} = 0 : $model->{$fieldName} = 1;

        $model->save();
    }
}