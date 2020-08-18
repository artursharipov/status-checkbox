yii2-img
=================

Статус ввиде чекбоксов в gridview yii2 
  
Использование
------------------

В контроллер (для каждой модели hashKlass уникальный): 

```php

public function actions()
{
    return [
        'change-column' => [
            'class' => 'common\components\status\actions\ChangeStatusAction',
            'self' => 'common\modules\page\models\Page'
        ],
    ];
}

```

В gridview:

```php

'columns' => [
    \common\components\status\StatusColumn::switch('status', [1]),
    \common\components\status\StatusColumn::switch('visible', [1]),
],

```

status и visible - поля таблицы, которые принимают [1, 2]