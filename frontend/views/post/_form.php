<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PostModel */
/* @var $categoryAll common\models\PostModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-model-form">

    <?php $form = ActiveForm::begin(); ?>

<!--<?//= $form->field($model, 'uid')->textInput(['maxlength' => true]) ?>-->

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->dropDownList($category) ?>
<!--<?//= $form->field($model, 'category_id')->textInput(['maxlength' => true]) ?>-->

    <?= $form->field($model, 'description')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput() ?>

    <?= $form->field($model, 'link_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cover_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'display')->checkboxList([1=>'可见',2=>'不可见']) ?>

<!-- <?/*= $form->field($model, 'attach')->textInput() */?>

    <?//= $form->field($model, 'view')->textInput(['maxlength' => true]) ?>

    <?/*= $form->field($model, 'comment')->textInput(['maxlength' => true]) */?>

    <?/*= $form->field($model, 'create_time')->textInput(['maxlength' => true]) */?>

    <?/*= $form->field($model, 'update_time')->textInput(['maxlength' => true]) */?>

-->
    <?= $form->field($model, 'status')->checkboxList([1=>'可用',2=>'不可用']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
