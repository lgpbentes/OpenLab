<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Aula */

$this->title = 'Nova Aula';
$this->params['breadcrumbs'][] = ['label' => 'Aulas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aula-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
