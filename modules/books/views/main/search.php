<?php //debug($books);

use yii\widgets\Pjax;

?>



<div>

    <h3>Поиск: <?= \yii\helpers\Html::encode($q) ?></h3>

</div>
<?php Pjax::begin() ?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><b>Книги на балансе</b></h3>



                <div class="box-tools">
                    <form action="<?=  \yii\helpers\Url::to(['main/book']) ?>" method="get">
                    <div class="input-group input-group-sm hidden-xs" style="width: 20px;">

<!--                            <input type="text" name="q" class="form-control pull-right" placeholder="Поиск по названию книги">-->

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-remove"></i></button>
                            </div>

                    </div>
                    </form>
                </div>
            </div>
            <!-- /.box-header -->
            <?php if(!empty($books)): ?>
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


                <?= \yii\widgets\LinkPager::widget([
                    'pagination' => $pages,
                    'nextPageCssClass' => 'next test',
                ]) ?>
            </div>
            <?php else: ?>
                <div class="w3ls_w3l_banner_nav_right_grid1">
                    <h6>Поиск не дал результатов</h6></div>
            <?php endif;?>
        </div>
    </div>
</div>
<?php Pjax::end() ?>
