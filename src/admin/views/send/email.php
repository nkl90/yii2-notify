<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model yii2lab\notify\admin\forms\MessageForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = Yii::t('notify/main', 'email');
Yii::$app->navigation->breadcrumbs->create($this->title);
?>
<div class="send-email">

    <div class="row">
        <div class="col-lg-5">
			<?php $form = ActiveForm::begin(); ?>
			
			<?= $form->field($model, 'address')->textInput(['autofocus' => true]) ?>
			
			<?= $form->field($model, 'subject')->textInput() ?>
			
			<?= $form->field($model, 'content')->textarea() ?>

            <div class="form-group">
				<?= Html::submitButton(t('action', 'send'), ['class' => 'btn btn-primary']) ?>
            </div>
			
			<?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
