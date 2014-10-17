<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'doc-status-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'doc_status_descr'); ?>
		<?php echo $form->textField($model, 'doc_status_descr', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'doc_status_descr'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('docLinks')); ?></label>
		<?php echo $form->checkBoxList($model, 'docLinks', GxHtml::encodeEx(GxHtml::listDataEx(DocLinks::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->