<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property string $id
 * @property string $title
 * @property string $description
 * @property integer $display
 * @property string $create_time
 * @property string $update_time
 * @property integer $status
 */
class CategoryModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['display', 'create_time', 'update_time', 'status'], 'integer'],
            [['title'], 'string', 'max' => 80],
            [['description'], 'string', 'max' => 140],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '分类ID',
            'title' => '分类标题',
            'description' => '描述',
            'display' => '可见性',
            'create_time' => '创建时间',
            'update_time' => '更新时间',
            'status' => '数据状态',
        ];
    }

     /**
     * @return string
     */
}
