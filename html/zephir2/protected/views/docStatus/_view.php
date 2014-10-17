<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('doc_status_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->doc_status_id), array('view', 'id' => $data->doc_status_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('doc_status_descr')); ?>:
	<?php echo GxHtml::encode($data->doc_status_descr); ?>
	<br />

</div>