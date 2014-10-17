<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'doc-links-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'official_id'); ?>
		<?php echo $form->dropDownList($model, 'official_id', GxHtml::listDataEx(Official::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'official_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'link'); ?>
		<?php echo $form->textField($model, 'link', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'link'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'manager_id'); ?>
		<?php echo $form->dropDownList($model, 'manager_id', GxHtml::listDataEx(Manager::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'manager_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'status_id'); ?>
		<?php echo $form->dropDownList($model, 'status_id', GxHtml::listDataEx(DocStatus::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'status_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textField($model, 'comment', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'comment'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->