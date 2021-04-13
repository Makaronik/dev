<?php

namespace app\modules\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $art
 * @property string|null $created_date
 * @property string|null $autor
 */
class Book extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'book';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_date'/*, 'updated_at' */],
//                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                // если вместо метки времени UNIX используется datetime:
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    public function rules()
    {
        return [
            [['name', 'art', 'autor'], 'required'],
            [['created_date'], 'safe'],
            [['name', 'art', 'autor'], 'string', 'max' => 255],
        ];
    }


    public function attributeLabels()
    {
        return [
//            'id' => 'ID',
            'name' => 'Наименование',
            'art' => 'Артикул',
//            'created_date' => 'Created Date',
            'autor' => 'Автор',
        ];
    }
}
