<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'device-type-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'device_type'); ?>
		<?php echo $form->textField($model, 'device_type'); ?>
		<?php echo $form->error($model,'device_type'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'device_name'); ?>
		<?php echo $form->textField($model, 'device_name', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'device_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'device_descr'); ?>
		<?php echo $form->textField($model, 'device_descr', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'device_descr'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'part_price'); ?>
		<?php echo $form->textField($model, 'part_price'); ?>
		<?php echo $form->error($model,'part_price'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'device_img_link'); ?>
		<?php echo $form->textField($model, 'device_img_link', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'device_img_link'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('devices')); ?></label>
		<?php echo $form->checkBoxList($model, 'devices', GxHtml::encodeEx(GxHtml::listDataEx(Device::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->