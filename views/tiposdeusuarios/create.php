<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tiposdeusuarios */

$this->title = Yii::t('app', 'Create Tiposdeusuarios');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tiposdeusuarios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tiposdeusuarios-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
