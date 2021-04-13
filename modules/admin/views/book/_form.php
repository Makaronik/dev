<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Book */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'art')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'created_date')->textInput() ?>

    <?= $form->field($model, 'autor')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'status')->checkbox() ?>

<!--    --><?//= $form->field($model, 'condition')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
