<?php //debug($books);

use yii\widgets\Pjax;
?>


<div>



 <?php   $form = \yii\widgets\ActiveForm::begin(); ?>
    <?= $form->field($book, 'name') ?>
    <?= $form->field($book, 'art') ?>
    <?= $form->field($book, 'autor') ?>
    <?= \yii\helpers\Html::submitButton('Сохранить', ['class' => 'btn btn-block btn-success']) ?>
    <?php \yii\widgets\ActiveForm::end() ?>

</div>
<?php Pjax::begin() ?>
<div>

    <form action="<?=  \yii\helpers\Url::to(['main/check']) ?>" id='bookForm' data-pjax>
        <input name="ch" type='checkbox' id='bookCheckbox'>
    </form>

</div>


<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><b>Книги на балансе</b></h3>

                <div class="box-tools">




                    <form action="<?=  \yii\helpers\Url::to(['main/search']) ?>" method="get" data-pjax>
                    <div class="input-group input-group-sm hidden-xs" style="width: 230px;">


                        <input type="text" name="q" class="form-control pull-right" placeholder="Поиск по названию книги">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>

                    </div>
                    </form>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Наименование</th>
                        <th>Артикул</th>
                        <th>Дата поступления</th>
                        <th>Автор</th>
                        <th>Статус</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;
                    foreach ($books as $item): ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $item['name'] ?></td>
                            <td><?= $item['art'] ?></td>
                            <td><?= $item['created_date'] ?></td>
                            <td><?= $item['autor'] ?></td>
                            <td <?php if ($item['status'] == true) {
                                echo 'class="label label-success"> в наличии';

                            }
                            if ($item['status'] == false) {
                                echo 'class="label label-danger"> у клиента';
                            } ?> </td>

                        </tr>

                        <?php $i++; endforeach; ?>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>


<?php Pjax::end() ?>