<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('doc_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->doc_id), array('view', 'id' => $data->doc_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('official_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->official)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('link')); ?>:
	<?php echo GxHtml::encode($data->link); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('manager_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->manager)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('status_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->status)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('comment')); ?>:
	<?php echo GxHtml::encode($data->comment); ?>
	<br />

</div>