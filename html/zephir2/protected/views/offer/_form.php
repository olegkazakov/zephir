<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'offer-form',
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
		<?php echo $form->labelEx($model,'firm_type'); ?>
		<?php echo $form->textField($model, 'firm_type'); ?>
		<?php echo $form->error($model,'firm_type'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'firm_name'); ?>
		<?php echo $form->textField($model, 'firm_name', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'firm_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'ceo'); ?>
		<?php echo $form->textField($model, 'ceo', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'ceo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'inn'); ?>
		<?php echo $form->textField($model, 'inn', array('maxlength' => 15)); ?>
		<?php echo $form->error($model,'inn'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'kpp'); ?>
		<?php echo $form->textField($model, 'kpp', array('maxlength' => 12)); ?>
		<?php echo $form->error($model,'kpp'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'payacc'); ?>
		<?php echo $form->textField($model, 'payacc', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'payacc'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'bank'); ?>
		<?php echo $form->textField($model, 'bank', array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'bank'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'bik'); ?>
		<?php echo $form->textField($model, 'bik', array('maxlength' => 12)); ?>
		<?php echo $form->error($model,'bik'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'coracc'); ?>
		<?php echo $form->textField($model, 'coracc', array('maxlength' => 25)); ?>
		<?php echo $form->error($model,'coracc'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'okpo'); ?>
		<?php echo $form->textField($model, 'okpo', array('maxlength' => 12)); ?>
		<?php echo $form->error($model,'okpo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'regnum'); ?>
		<?php echo $form->textField($model, 'regnum', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'regnum'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'offer_type'); ?>
		<?php echo $form->textField($model, 'offer_type'); ?>
		<?php echo $form->error($model,'offer_type'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'offer_type_id'); ?>
		<?php echo $form->textField($model, 'offer_type_id'); ?>
		<?php echo $form->error($model,'offer_type_id'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->