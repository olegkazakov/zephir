<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('part_descr_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->part_descr_id), array('view', 'id' => $data->part_descr_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('descr_name')); ?>:
	<?php echo GxHtml::encode($data->descr_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('descr_body')); ?>:
	<?php echo GxHtml::encode($data->descr_body); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('part_price')); ?>:
	<?php echo GxHtml::encode($data->part_price); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('part_img_link')); ?>:
	<?php echo GxHtml::encode($data->part_img_link); ?>
	<br />

</div>