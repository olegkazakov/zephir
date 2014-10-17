<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('firm_type_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->firm_type_id), array('view', 'id' => $data->firm_type_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('firm_type_descr')); ?>:
	<?php echo GxHtml::encode($data->firm_type_descr); ?>
	<br />

</div>