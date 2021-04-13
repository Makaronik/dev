<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */

$this->title = "заказ № {$model->id}";
$this->params['breadcrumbs'][] = ['label' => 'Заказы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
                <div class="order-view">


                    <p>
                        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </p>

                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'id',
                            'created_at',
                            'updated_at',
                            'status:boolean',
//                            'client_id',
                            [
                                'attribute' => 'client_id',
                                'value' => $model->client['name'],
                            ],
//                            'set_worker_id',
                            [
                                'attribute' => 'set_worker_id',
                                'value' => $model->setWorker['name'],
                            ],
                            'get_worker_id',
                            'deadline',
                        ],
                    ]) ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?//= debug($model->setWorker['name']) ?>

<?php $items = $model->book ?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Книги в заказе</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th>ID</th>
                        <th>Наименование</th>
                        <!--                        <th>Артикул</th>-->
                        <!--                        <th>Автор</th>-->
                    </tr>

                    <?php foreach ($items as $item): ?>
                        <tr>
                            <td><?= $item['id']; ?></td>
                            <td><?= $item['name']; ?></td>
                        </tr>
                        <!--                        <td>--><? //= $item['id']; ?><!--</td>-->
                        <!--                        <td>--><? //= $item['id']; ?><!--</td>-->
                    <?php endforeach; ?>

                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>