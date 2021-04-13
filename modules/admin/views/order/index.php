<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $model app\modules\admin\models\Order */

$this->title = 'Заказы';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
                <div class="order-index">
                    <p>
                        <?= Html::a('Создание заказа', ['create'], ['class' => 'btn btn-success']) ?>
                    </p>
                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
                            'id',
                            'created_at',
                            'deadline',
//            'updated_at',
                            'status:boolean',
//                            'client_id',
                            [
                              'attribute' => 'client_id',
                              'value' => function($data){
                               return $data->client['name'];
                              }
                            ],
//                            'set_worker_id',
                            ['attribute' => 'set_worker_id',
                            'value' => function($data){
                            return $data->setWorker['name'];
                            }
                            ],
                            'get_worker_id',
                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>
                    <?php Pjax::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>