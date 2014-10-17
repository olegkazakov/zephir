<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('device_part_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->device_part_id), array('view', 'id' => $data->device_part_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('device_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->device)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('part_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->part)); ?>
	<br />

</div>