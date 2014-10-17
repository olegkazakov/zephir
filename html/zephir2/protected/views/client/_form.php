<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'client-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->dropDownList($model, 'user_id', GxHtml::listDataEx(User::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'user_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'unsaved_doc'); ?>
		<?php echo $form->textField($model, 'unsaved_doc', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'unsaved_doc'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'manager_id'); ?>
		<?php echo $form->dropDownList($model, 'manager_id', GxHtml::listDataEx(Manager::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'manager_id'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->