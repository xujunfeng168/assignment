<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

// $this->title = '图书馆管理系统';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-index">
    <p>
        <?= Html::a('添加图书', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'b_name',
            'b_class',
            'b_author',
            'b_des:ntext',
            'b_date',
            //'b_img:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>