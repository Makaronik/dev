<?php


namespace app\modules\admin\controllers;


use yii\filters\AccessControl;
use yii\web\Controller;

class AppAdminController extends Controller
{



    protected function setMeta($title = null, $keywords = null, $descriptions = null)
    {
        $this->view->title = $title;
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords" ]);
        $this->view->registerMetaTag(['name' => 'descriptions', 'content' => "$descriptions" ]);
    }

}