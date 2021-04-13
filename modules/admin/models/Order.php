<?php

namespace app\modules\admin\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property bool|null $status
 * @property int|null $client_id
 * @property int|null $set_worker_id
 * @property int|null $get_worker_id
 * @property string|null $deadline
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at'/*, 'updated_at'*/],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                // если вместо метки времени UNIX используется datetime:
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    public function getOrderBook()
    {
        return $this->hasMany(OrderBook::class,['order_id' => 'id']);
    }
    public function getBook()
    {
        return $this->hasMany(Book::class,['id' => 'book_id'])->via('orderBook');
    }

    public function getSetWorker()
    {
        return $this->hasOne(Worker::class,['id' => 'set_worker_id']);
    }
    public function getClient()
    {
        return $this->hasOne(Client::class,['id' => 'client_id']);
    }



    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['client_id', 'set_worker_id',/* 'deadline'*/], 'required'],
            [['created_at', 'updated_at', 'deadline'], 'safe'],
            [['status'], 'boolean'],
            [['client_id', 'set_worker_id', 'get_worker_id'], 'default', 'value' => null],
            [['client_id', 'set_worker_id', 'get_worker_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID заказа',
            'created_at' => 'Дата выдачи',
            'updated_at' => 'Дата возврата',
            'status' => 'Заказ у клиента',
            'client_id' => 'Клиент',
            'set_worker_id' => 'Выдал сотрудник',
            'get_worker_id' => 'Принял сотрудник',
            'deadline' => 'Срок выдачи',
        ];
    }
}
