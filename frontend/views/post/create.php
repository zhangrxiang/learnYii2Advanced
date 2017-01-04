<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\PostModel */

$this->title = Yii::t('app', 'Create Post Model');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Post Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <h1><?= Html::encode($this->title) ?></h1>
        <div class="col-lg-9">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
        <div class="col-lg-3">
        </div>
    </div>
</div>
<div class="post-model-create">




</div>
