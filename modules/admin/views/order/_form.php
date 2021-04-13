<?php

use app\modules\admin\models\Book;
use kartik\datetime\DateTimePicker;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin([
        'fieldConfig' => [
            'template' => "
                        <div class='col-md-6'>
                             <p>{label}</p> \n {input} \n
                             <div>{error}</div>                  
                        </div>
                    ",
        ]
    ]);

    ?>

    <!--    --><? //= $form->field($model, 'created_at')->textInput() ?>

    <!--    --><? //= $form->field($model, 'updated_at')->textInput() ?>

    <!--    --><? //= $form->field($model, 'status')->checkbox() ?>

    <?= $form->field($model, 'client_id')->dropDownList(
        ArrayHelper::map(\app\modules\admin\models\Client::find()->all(), 'id', 'name')
    ) ?>

    <?= $form->field($model, 'set_worker_id')->dropDownList(
        ArrayHelper::map(\app\modules\admin\models\Worker::find()->all(), 'id', 'name')
    ) ?>

    <!--    --><? //= $form->field($model, 'get_worker_id')->textInput() ?>

<!--    --><?//= $form->field($model, 'deadline')->textInput()    //стоковое поле ?>
    <?=  $form->field($model, 'deadline')->widget(DateTimePicker::class, [
        'name' => 'date',
        'value' => '18-06-1018, 14:45',
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'dd-M-yyyy hh:ii'
        ]
    ]);
    ?>

    <!--    --><? //= $form->field($model, 'book_id')->dropDownList($items, $params) ?>

    <!--    --><? //= $form->field($model, 'book_id')->dropDownList($items, $params) ?>


    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
