<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?= \Yii::$app->user->identity->username ?></p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="<?= \yii\helpers\Url::to(['main/index']) ?>"><i class="fa fa-link"></i> <span>Главная</span></a>
            </li>
            <li><a href="<?= \yii\helpers\Url::to(['book/index']) ?>"><i class="fa fa-link"></i> <span>Книги</span></a>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= \yii\helpers\Url::to(['order/index']) ?>">Заказы</a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['client/index']) ?>">Клиенты</a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['worker/index']) ?>">Сотрудники</a></li>
                    </li>
                </ul>
                <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
