<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\MonthyearSearch;
use common\models\Monthyear;

/* @var $this yii\web\View */
/* @var $model common\models\MonthyearSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="monthyear-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'month') ?>

    <?= $form->field($model, 'year') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
