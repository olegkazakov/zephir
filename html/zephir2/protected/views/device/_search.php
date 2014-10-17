<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'device_id'); ?>
		<?php echo $form->textField($model, 'device_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'official_id'); ?>
		<?php echo $form->dropDownList($model, 'official_id', GxHtml::listDataEx(Official::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'device_model_id'); ?>
		<?php echo $form->dropDownList($model, 'device_model_id', GxHtml::listDataEx(DeviceType::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'serial_number'); ?>
		<?php echo $form->textField($model, 'serial_number', array('maxlength' => 55)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'country'); ?>
		<?php echo $form->textField($model, 'country', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'postal_code'); ?>
		<?php echo $form->textField($model, 'postal_code', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'region'); ?>
		<?php echo $form->textField($model, 'region', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'city'); ?>
		<?php echo $form->textField($model, 'city', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'address'); ?>
		<?php echo $form->textField($model, 'address', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'total_income'); ?>
		<?php echo $form->textField($model, 'total_income'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'total_expence'); ?>
		<?php echo $form->textField($model, 'total_expence'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'lat'); ?>
		<?php echo $form->textField($model, 'lat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'lon'); ?>
		<?php echo $form->textField($model, 'lon'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'status_id'); ?>
		<?php echo $form->dropDownList($model, 'status_id', GxHtml::listDataEx(DeviceStatus::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
