<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'device-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'official_id'); ?>
		<?php echo $form->dropDownList($model, 'official_id', GxHtml::listDataEx(Official::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'official_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'device_model_id'); ?>
		<?php echo $form->dropDownList($model, 'device_model_id', GxHtml::listDataEx(DeviceType::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'device_model_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'serial_number'); ?>
		<?php echo $form->textField($model, 'serial_number', array('maxlength' => 55)); ?>
		<?php echo $form->error($model,'serial_number'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model, 'country', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'country'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'postal_code'); ?>
		<?php echo $form->textField($model, 'postal_code', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'postal_code'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'region'); ?>
		<?php echo $form->textField($model, 'region', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'region'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model, 'city', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'city'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model, 'address', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'address'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'total_income'); ?>
		<?php echo $form->textField($model, 'total_income'); ?>
		<?php echo $form->error($model,'total_income'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'total_expence'); ?>
		<?php echo $form->textField($model, 'total_expence'); ?>
		<?php echo $form->error($model,'total_expence'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'lat'); ?>
		<?php echo $form->textField($model, 'lat'); ?>
		<?php echo $form->error($model,'lat'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'lon'); ?>
		<?php echo $form->textField($model, 'lon'); ?>
		<?php echo $form->error($model,'lon'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'status_id'); ?>
		<?php echo $form->dropDownList($model, 'status_id', GxHtml::listDataEx(DeviceStatus::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'status_id'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('deviceParts')); ?></label>
		<?php echo $form->checkBoxList($model, 'deviceParts', GxHtml::encodeEx(GxHtml::listDataEx(DevicePart::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->