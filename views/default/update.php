<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model system\modules\testimotional\models\Testimotional */

$this->title = Yii::t('testimotional', 'Update Testimotional: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('testimotional', 'Testimotionals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('testimotional', 'Edit');
?>
<div class="testimotional-update">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
