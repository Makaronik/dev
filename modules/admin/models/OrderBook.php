<?php

namespace app\modules\admin\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "order_book".
 *
 * @property int $id
 * @property int|null $order_id
 * @property int|null $book_id
 * @property string|null $name
 */
class OrderBook extends ActiveRecord
{

    public static function tableName()
    {
        return 'order_book';
    }

    public function getBook()
    {
        return $this->hasMany(Book::class,['id' => 'book_id']);
    }

    public function rules()
    {
        return [
            [['order_id', 'book_id'], 'default', 'value' => null],
            [['order_id', 'book_id'], 'integer'],
        ];
    }

    public function saveOrderBook($books, $model_id)
    {
        foreach ($books as $book) {

            $this->isNewRecord = true;
            $this->order_id = $model_id;
            $this->book_id = $book;
            if (!$this->save()) {
                return false;
            }
        }
        return true;
    }

    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'book_id' => 'Book ID',
        ];
    }
}
