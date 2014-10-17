<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'offer_id'); ?>
		<?php echo $form->textField($model, 'offer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'official_id'); ?>
		<?php echo $form->dropDownList($model, 'official_id', GxHtml::listDataEx(Official::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'firm_type'); ?>
		<?php echo $form->textField($model, 'firm_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'firm_name'); ?>
		<?php echo $form->textField($model, 'firm_name', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ceo'); ?>
		<?php echo $form->textField($model, 'ceo', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'inn'); ?>
		<?php echo $form->textField($model, 'inn', array('maxlength' => 15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'kpp'); ?>
		<?php echo $form->textField($model, 'kpp', array('maxlength' => 12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'payacc'); ?>
		<?php echo $form->textField($model, 'payacc', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'bank'); ?>
		<?php echo $form->textField($model, 'bank', array('maxlength' => 250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'bik'); ?>
		<?php echo $form->textField($model, 'bik', array('maxlength' => 12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'coracc'); ?>
		<?php echo $form->textField($model, 'coracc', array('maxlength' => 25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'okpo'); ?>
		<?php echo $form->textField($model, 'okpo', array('maxlength' => 12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'regnum'); ?>
		<?php echo $form->textField($model, 'regnum', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'offer_type'); ?>
		<?php echo $form->textField($model, 'offer_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'offer_type_id'); ?>
		<?php echo $form->textField($model, 'offer_type_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
