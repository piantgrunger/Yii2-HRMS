<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\jnsabsen */

$this->title = Yii::t('app', 'Jns Absen  Baru');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Daftar Jns Absen'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jnsabsen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
