<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'manager-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'login'); ?>
		<?php echo $form->textField($model, 'login', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'login'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model, 'password', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'password'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'role'); ?>
		<?php echo $form->textField($model, 'role', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'role'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'last_login'); ?>
		<?php echo $form->textField($model, 'last_login'); ?>
		<?php echo $form->error($model,'last_login'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'reg_date'); ?>
		<?php echo $form->textField($model, 'reg_date'); ?>
		<?php echo $form->error($model,'reg_date'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('docLinks')); ?></label>
		<?php echo $form->checkBoxList($model, 'docLinks', GxHtml::encodeEx(GxHtml::listDataEx(DocLinks::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('userInfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'userInfos', GxHtml::encodeEx(GxHtml::listDataEx(UserInfo::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->