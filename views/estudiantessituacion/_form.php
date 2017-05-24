<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Estudiantessituacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="estudiantessituacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_alumno')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'situacion_academica')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
