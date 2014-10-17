<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('device_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->device_id), array('view', 'id' => $data->device_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('official_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->official)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('device_model_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->deviceModel)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('serial_number')); ?>:
	<?php echo GxHtml::encode($data->serial_number); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('country')); ?>:
	<?php echo GxHtml::encode($data->country); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('postal_code')); ?>:
	<?php echo GxHtml::encode($data->postal_code); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('region')); ?>:
	<?php echo GxHtml::encode($data->region); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('city')); ?>:
	<?php echo GxHtml::encode($data->city); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('address')); ?>:
	<?php echo GxHtml::encode($data->address); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('total_income')); ?>:
	<?php echo GxHtml::encode($data->total_income); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('total_expence')); ?>:
	<?php echo GxHtml::encode($data->total_expence); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('lat')); ?>:
	<?php echo GxHtml::encode($data->lat); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('lon')); ?>:
	<?php echo GxHtml::encode($data->lon); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('status_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->status)); ?>
	<br />
	*/ ?>

</div>