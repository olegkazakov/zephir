<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'device-status-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'device_status_desrc'); ?>
		<?php echo $form->textField($model, 'device_status_desrc', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'device_status_desrc'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('devices')); ?></label>
		<?php echo $form->checkBoxList($model, 'devices', GxHtml::encodeEx(GxHtml::listDataEx(Device::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->