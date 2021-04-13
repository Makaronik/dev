<?php


namespace app\modules\books\controllers;


use yii\filters\AccessControl;
use yii\web\Controller;

class AppBooksController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
//                        'actions' => ['logout'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    protected function setMeta($title = null, $keywords = null, $descriptions = null)
    {
        $this->view->title = $title;
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords" ]);
        $this->view->registerMetaTag(['name' => 'descriptions', 'content' => "$descriptions" ]);
    }

}