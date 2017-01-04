<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
$this->title = Yii::t('common','My Yii Application');
?>
<div class="post-model-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'uid',
            'title',
            'category_id',
            'description',
            // 'type',
            // 'link_id',
            // 'cover_id',
            // 'display',
            // 'attach',
            // 'view',
            // 'comment',
            // 'create_time',
            // 'update_time',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?></div>

