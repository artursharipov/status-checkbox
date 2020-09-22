yii2-status-checkbox
=================

Статус ввиде чекбоксов в gridview yii2 
  
Использование
------------------

В контроллер 

```php

public function actions()
{
    return [
        'change-column' => [
            'class' => 'common\components\statusCheckbox\actions\ChangeStatusAction',
            'self' => 'common\modules\page\models\Page'
        ],
    ];
}

```
Добавить поле status в таблицу БД.
В gridview:

```php

'columns' => [
    \common\components\statusCheckbox\Status::column('switch', 'status', [1,2]),
    //\common\components\statusCheckbox\Status::column('checkbox', 'status', [1,2]),
],

```
В form.php

```php

$form->field($model, 'status', \common\components\statusCheckbox\Status::statusTemplate('Статус'))->checkBox(['label' => false])

```

status и visible - поля таблицы int
Второй параметр массив id - которые нельзя переключать
