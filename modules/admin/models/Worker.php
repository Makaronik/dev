<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "worker".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $position
 */
class Worker extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'worker';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'position'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ФИО',
            'position' => 'Должность',
        ];
    }
}
