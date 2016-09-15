<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Aula;

/* @var $this yii\web\View */
/* @var $model common\models\Disciplina */
/* @var $aulas common\models\Aula */

$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Disciplinas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disciplina-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nome',
        ],
    ]) ?>
    <p>
        <?= Html::a('Nova Aula', ['aula/create', 'Disciplina_id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <p>
    <?php
        foreach ($model->aulas as $aula){
            echo $aula->subject .'</br>';
        }
    ?>
    </p>
</div>
