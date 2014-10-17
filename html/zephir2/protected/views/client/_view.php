<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('client_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->client_id), array('view', 'id' => $data->client_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('user_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->user)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('unsaved_doc')); ?>:
	<?php echo GxHtml::encode($data->unsaved_doc); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('manager_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->manager)); ?>
	<br />

</div>