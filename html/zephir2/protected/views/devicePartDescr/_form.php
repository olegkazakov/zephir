<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'device-part-descr-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'descr_name'); ?>
		<?php echo $form->textField($model, 'descr_name', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'descr_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'descr_body'); ?>
		<?php echo $form->textField($model, 'descr_body', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'descr_body'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'part_price'); ?>
		<?php echo $form->textField($model, 'part_price'); ?>
		<?php echo $form->error($model,'part_price'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'part_img_link'); ?>
		<?php echo $form->textField($model, 'part_img_link', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'part_img_link'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('deviceParts')); ?></label>
		<?php echo $form->checkBoxList($model, 'deviceParts', GxHtml::encodeEx(GxHtml::listDataEx(DevicePart::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->