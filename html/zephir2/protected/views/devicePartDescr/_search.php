<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'part_descr_id'); ?>
		<?php echo $form->textField($model, 'part_descr_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'descr_name'); ?>
		<?php echo $form->textField($model, 'descr_name', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'descr_body'); ?>
		<?php echo $form->textField($model, 'descr_body', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'part_price'); ?>
		<?php echo $form->textField($model, 'part_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'part_img_link'); ?>
		<?php echo $form->textField($model, 'part_img_link', array('maxlength' => 255)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
