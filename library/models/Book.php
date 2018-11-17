<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $b_id
 * @property string $b_name
 * @property string $b_class
 * @property string $b_author
 * @property string $b_des
 * @property string $b_img
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['b_name', 'b_class', 'b_author', 'b_des'], 'required'],
            [['b_des'], 'string'],
            [['b_name'], 'string', 'max' => 60],
            [['b_class', 'b_author'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'b_id' => 'ID',
            'b_name' => '书名',
            'b_class' => '类型',
            'b_author' => '作者',
            'b_des' => '说明',
            'b_date' => '时间'
        ];
    }
}
