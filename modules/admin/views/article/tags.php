<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Category;
use app\models\Article;
use app\assets\PublicAsset;
use app\assets\AppAsset;

AppAsset::register($this);


/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= Html::dropDownList('tags', $selectedTags, $tags, ['class'=>'form-control', 'multiple'=>true] )?>


    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>