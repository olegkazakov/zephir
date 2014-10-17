<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'device-part-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'device_id'); ?>
		<?php echo $form->dropDownList($model, 'device_id', GxHtml::listDataEx(Device::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'device_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'part_id'); ?>
		<?php echo $form->dropDownList($model, 'part_id', GxHtml::listDataEx(DevicePartDescr::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'part_id'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->