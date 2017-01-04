<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%post}}".
 *
 * @property string $id
 * @property string $uid
 * @property string $title
 * @property string $category_id
 * @property string $description
 * @property integer $type
 * @property string $link_id
 * @property string $cover_id
 * @property integer $display
 * @property integer $attach
 * @property string $view
 * @property string $comment
 * @property string $create_time
 * @property string $update_time
 * @property integer $status
 */
class PostModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%post}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'category_id', 'type', 'link_id', 'cover_id', 'display', 'attach', 'view', 'comment', 'create_time', 'update_time', 'status'], 'integer'],
            [['category_id'], 'required'],
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
            'id' => '文档ID',
            'uid' => '用户ID',
            'title' => '标题',
            'category_id' => '所属分类',
            'description' => '描述',
            'type' => '内容类型',
            'link_id' => '外链',
            'cover_id' => '封面',
            'display' => '可见性',
            'attach' => '附件数量',
            'view' => '浏览量',
            'comment' => '评论数',
            'create_time' => '创建时间',
            'update_time' => '更新时间',
            'status' => '数据状态',
        ];
    }
}
