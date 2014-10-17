<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('device_status_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->device_status_id), array('view', 'id' => $data->device_status_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('device_status_desrc')); ?>:
	<?php echo GxHtml::encode($data->device_status_desrc); ?>
	<br />

</div>