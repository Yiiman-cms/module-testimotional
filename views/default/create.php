<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model system\modules\testimotional\models\Testimotional */

$this->title = Yii::t('testimotional', 'Add Testimotional');
$this->params['breadcrumbs'][] = ['label' => Yii::t('testimotional', 'Testimotionals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testimotional-create">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
