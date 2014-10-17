<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('official_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->official_id), array('view', 'id' => $data->official_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('user_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->user)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('inn')); ?>:
	<?php echo GxHtml::encode($data->inn); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ogrn')); ?>:
	<?php echo GxHtml::encode($data->ogrn); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('firm_name')); ?>:
	<?php echo GxHtml::encode($data->firm_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('contact')); ?>:
	<?php echo GxHtml::encode($data->contact); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('contact_phone')); ?>:
	<?php echo GxHtml::encode($data->contact_phone); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('firm_type_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->firmType)); ?>
	<br />
	*/ ?>

</div>