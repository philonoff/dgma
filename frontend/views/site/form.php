<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin();?>
    <?= $form->field($model, 'name');?>
    <?= $form->field($model, 'email');?>
    <?= Html::submitButton('Send');?>
<?php ActiveForm::end();?>
