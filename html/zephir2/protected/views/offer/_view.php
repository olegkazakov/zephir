<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('offer_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->offer_id), array('view', 'id' => $data->offer_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('official_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->official)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('firm_type')); ?>:
	<?php echo GxHtml::encode($data->firm_type); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('firm_name')); ?>:
	<?php echo GxHtml::encode($data->firm_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ceo')); ?>:
	<?php echo GxHtml::encode($data->ceo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('inn')); ?>:
	<?php echo GxHtml::encode($data->inn); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('kpp')); ?>:
	<?php echo GxHtml::encode($data->kpp); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('payacc')); ?>:
	<?php echo GxHtml::encode($data->payacc); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('bank')); ?>:
	<?php echo GxHtml::encode($data->bank); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('bik')); ?>:
	<?php echo GxHtml::encode($data->bik); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('coracc')); ?>:
	<?php echo GxHtml::encode($data->coracc); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('okpo')); ?>:
	<?php echo GxHtml::encode($data->okpo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('regnum')); ?>:
	<?php echo GxHtml::encode($data->regnum); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('offer_type')); ?>:
	<?php echo GxHtml::encode($data->offer_type); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('offer_type_id')); ?>:
	<?php echo GxHtml::encode($data->offer_type_id); ?>
	<br />
	*/ ?>

</div>