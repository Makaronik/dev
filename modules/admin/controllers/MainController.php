<?php


namespace app\modules\admin\controllers;


use app\modules\admin\models\Bookk;
use yii\data\Pagination;
use yii\web\Controller;

class MainController extends AppAdminController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTest()
    {
        return $this->render('test');
    }

    public function actionBookk()
    {
        $book = new Bookk;
        if ($book->load(\Yii::$app->request->post()) && $book->validate()) {
            $book->save();
            $this->refresh();
        }
        $books = Bookk::find()->all();
        return $this->render('bookk', compact('book', 'books'));

    }

    public function actionSearch(){
//        if(\Yii::$app->request->isPjax){
//            echo 'ok';
//        }




        $q = trim(\Yii::$app->request->get('q'));
        $this->setMeta("Поиск: {$q} :: " . \Yii::$app->name);
        if(!$q){
            return $this->render('search');
        }

        $query = Bookk::find()->where(['Like', 'name', $q]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 4, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $books = $query->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('search', compact('books', 'pages', 'q'));

    }

    public function actionCheck()
    {

        $ch = \Yii::$app->request->get('ch');
        if($ch){
            $query = Bookk::find()->where(['status' => 1]);
            $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 4, 'forcePageParam' => false, 'pageSizeParam' => false]);
            $books = $query->offset($pages->offset)->limit($pages->limit)->all();

            return $this->render('search', compact('books', 'pages'));
        }

    }


}