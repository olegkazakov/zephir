<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('manager_info_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->manager_info_id), array('view', 'id' => $data->manager_info_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('name')); ?>:
	<?php echo GxHtml::encode($data->name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('second_name')); ?>:
	<?php echo GxHtml::encode($data->second_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('surname')); ?>:
	<?php echo GxHtml::encode($data->surname); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('phone')); ?>:
	<?php echo GxHtml::encode($data->phone); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('email')); ?>:
	<?php echo GxHtml::encode($data->email); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('unposted_docs')); ?>:
	<?php echo GxHtml::encode($data->unposted_docs); ?>
	<br />

</div>