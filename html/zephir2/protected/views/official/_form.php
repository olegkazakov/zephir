<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'official-form',
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
		<?php echo $form->labelEx($model,'inn'); ?>
		<?php echo $form->textField($model, 'inn', array('maxlength' => 15)); ?>
		<?php echo $form->error($model,'inn'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'ogrn'); ?>
		<?php echo $form->textField($model, 'ogrn', array('maxlength' => 15)); ?>
		<?php echo $form->error($model,'ogrn'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'firm_name'); ?>
		<?php echo $form->textField($model, 'firm_name', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'firm_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'contact'); ?>
		<?php echo $form->textField($model, 'contact', array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'contact'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'contact_phone'); ?>
		<?php echo $form->textField($model, 'contact_phone', array('maxlength' => 25)); ?>
		<?php echo $form->error($model,'contact_phone'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'firm_type_id'); ?>
		<?php echo $form->dropDownList($model, 'firm_type_id', GxHtml::listDataEx(FirmType::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'firm_type_id'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('accounts')); ?></label>
		<?php echo $form->checkBoxList($model, 'accounts', GxHtml::encodeEx(GxHtml::listDataEx(Account::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('devices')); ?></label>
		<?php echo $form->checkBoxList($model, 'devices', GxHtml::encodeEx(GxHtml::listDataEx(Device::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('docLinks')); ?></label>
		<?php echo $form->checkBoxList($model, 'docLinks', GxHtml::encodeEx(GxHtml::listDataEx(DocLinks::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('offers')); ?></label>
		<?php echo $form->checkBoxList($model, 'offers', GxHtml::encodeEx(GxHtml::listDataEx(Offer::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->