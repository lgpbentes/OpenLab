<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Imagem */

$this->title = 'Visualizar Imagem';
$this->params['breadcrumbs'][] = ['label' => 'Imagens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="imagem-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>

        <?= Html::a('Excluir', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem certeza que deseja excluir esse item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [

            [
                'attribute'=>'caminho',
                'value'=> \Yii::$app->request->BaseUrl.'/'.$model->caminho,
                'format' => ['image',['width'=>'500']],
            ],

            'legenda',
        ],
    ]) ?>

</div>
