<?php

namespace app\modules\books\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $art
 * @property string|null $created_date
 * @property string|null $autor
 * @property bool|null $status
 * @property string|null $condition
 */
class Test extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_date'], 'safe'],
            [['status'], 'boolean'],
            [['name', 'art', 'autor', 'condition'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'art' => 'Art',
            'created_date' => 'Created Date',
            'autor' => 'Autor',
            'status' => 'Status',
            'condition' => 'Condition',
        ];
    }
}
