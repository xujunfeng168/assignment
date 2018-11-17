<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Book */

$this->title = '更新图书';
$this->params['breadcrumbs'][] = ['label' => '图书馆管理系统', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->b_name, 'url' => ['view', 'id' => $model->b_id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="book-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
