<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('device_model_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->device_model_id), array('view', 'id' => $data->device_model_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('device_type')); ?>:
	<?php echo GxHtml::encode($data->device_type); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('device_name')); ?>:
	<?php echo GxHtml::encode($data->device_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('device_descr')); ?>:
	<?php echo GxHtml::encode($data->device_descr); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('part_price')); ?>:
	<?php echo GxHtml::encode($data->part_price); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('device_img_link')); ?>:
	<?php echo GxHtml::encode($data->device_img_link); ?>
	<br />

</div>