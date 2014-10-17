<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'device_model_id'); ?>
		<?php echo $form->textField($model, 'device_model_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'device_type'); ?>
		<?php echo $form->textField($model, 'device_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'device_name'); ?>
		<?php echo $form->textField($model, 'device_name', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'device_descr'); ?>
		<?php echo $form->textField($model, 'device_descr', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'part_price'); ?>
		<?php echo $form->textField($model, 'part_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'device_img_link'); ?>
		<?php echo $form->textField($model, 'device_img_link', array('maxlength' => 255)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
