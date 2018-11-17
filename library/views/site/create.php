<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Book */

$this->title = '图书馆管理系统';
$this->params['breadcrumbs'][] = ['label' => '图书馆管理系统', 'url' => ['index']];
$this->params['breadcrumbs'][] = '添加图书';
?>
<div class="book-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
