<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'device_part_id'); ?>
		<?php echo $form->textField($model, 'device_part_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'device_id'); ?>
		<?php echo $form->dropDownList($model, 'device_id', GxHtml::listDataEx(Device::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'part_id'); ?>
		<?php echo $form->dropDownList($model, 'part_id', GxHtml::listDataEx(DevicePartDescr::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
