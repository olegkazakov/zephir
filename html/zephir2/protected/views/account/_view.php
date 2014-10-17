<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('account_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->account_id), array('view', 'id' => $data->account_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('official_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->official)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('kpp')); ?>:
	<?php echo GxHtml::encode($data->kpp); ?>
	<br />
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
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('okpo')); ?>:
	<?php echo GxHtml::encode($data->okpo); ?>
	<br />
	*/ ?>

</div>