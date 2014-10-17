<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'firm-type-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'firm_type_descr'); ?>
		<?php echo $form->textField($model, 'firm_type_descr', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'firm_type_descr'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('officials')); ?></label>
		<?php echo $form->checkBoxList($model, 'officials', GxHtml::encodeEx(GxHtml::listDataEx(Official::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->