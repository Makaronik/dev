<?php


namespace app\modules\books\controllers;


use app\modules\models\Book;
use yii\data\Pagination;
use yii\web\Controller;

class MainController extends AppBooksController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTest()
    {
        return $this->render('test');
    }

    public function actionBook()
    {
        $book = new Book;
        if ($book->load(\Yii::$app->request->post()) && $book->validate()) {
            $book->save();
            $this->refresh();
        }
        $books = Book::find()->all();
        return $this->render('book', compact('book', 'books'));

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

        $query = Book::find()->where(['Like', 'name', $q]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 4, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $books = $query->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('search', compact('books', 'pages', 'q'));

    }

    public function actionCheck()
    {

        $ch = \Yii::$app->request->get('ch');
        if($ch){
            $query = Book::find()->where(['status' => 1]);
            $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 4, 'forcePageParam' => false, 'pageSizeParam' => false]);
            $books = $query->offset($pages->offset)->limit($pages->limit)->all();

            return $this->render('search', compact('books', 'pages'));
        }

    }


}