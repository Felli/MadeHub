<?php

use yii;
use yii\bootstrap\ActiveForm;
use yii\helper\Html;
use humhub\models\Setting;
use yii\helpers\Url;
?>
<?php $this->beginContent('@admin/views/setting/_advancedLayout.php') ?>

<p><?= Yii::t('AdminModule.views_setting_statistic', 'You can add an statistics HTML code snippet - which will added to all rendered pags.')?></p>
<br />

<?php $form = ActiveForm::begin(); ?>

<?php echo $form->errorSummary($model); ?>

<div class="form-group">
    <?= $form->labelEx($model, 'trackingHtmlCode'); ?>
    <?= $form->textArea($model, 'trackingHtmlCode', array('class' => 'form-control', 'rows' => '8')); ?>
</div>
<hr>

<?= Html::submitButton(Yii::t('AdminModule.views_setting_statistic', 'Save'), array('class' => 'btn btn-primary', 'data-ui-loader' => "")); ?>

<?= \humhub\widgets\DataSaved::widget(); ?>
<?php ActiveForm::end(); ?>

<?php $this->endContent(); ?>
