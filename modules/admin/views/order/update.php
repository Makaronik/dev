<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */
/* @var $searchModel app\modules\admin\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Редактирование заказа № ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Заказы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => "Заказ № {$model->id}", 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
                <div class="order-update">


                    <?= $this->render('_form', [
                        'model' => $model,
                    ]) ?>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="book-index">

    <?php Pjax::begin(); ?>

    <!-- Кнопка модального окна -->
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-cart-del">
        Удаление книг из заказа
    </button>
    <!-- Модальное окно -->
    <div class="modal fade" id="modal-cart-del" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Удаление книг из заказа</h4>
                </div>
                <div class="modal-body">
                    <?= GridView::widget([
                        'dataProvider' => $orderbookProvider,
                        'columns' => [
                            'order_id',
//            'book_id',
                            [
                                'attribute' => 'book_id',
                                'value' => function ($orderbook) {
                                    return $orderbook->book[0]['name'];
                                }
                            ],
//                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!--                    <button type="button" class="btn btn-primary">Save changes</button>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Модальное окно конец-->
    <? //= debug($orderbookProvider->models); ?>



    <?= \app\widgets\Alert::widget(); ?>
    <h3>Добавление книг в заказ</h3>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php $form = ActiveForm::begin([
        'action' => ['update', 'id' => $id],
        'method' => "post",
        'options' => ['data' => ['pjax' => true]],

    ]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'class' => 'yii\grid\CheckboxColumn',
            ],
            'id',
            'name',
            'art',
//            'created_date',
            ['attribute' => 'created_date',
                'format' => 'datetime',
            ],
            'autor',
            'status:boolean',
            //'condition',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    <?php ActiveForm::end(); ?>

    <?php Pjax::end(); ?>

</div>





