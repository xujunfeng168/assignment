<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Book */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'b_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b_class')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b_author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b_des')->textarea(['rows' => 5]) ?>


    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
