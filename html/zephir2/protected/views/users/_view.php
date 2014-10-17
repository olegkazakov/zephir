<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('user_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->user_id), array('view', 'id' => $data->user_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('login')); ?>:
	<?php echo GxHtml::encode($data->login); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('password')); ?>:
	<?php echo GxHtml::encode($data->password); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('last_login')); ?>:
	<?php echo GxHtml::encode($data->last_login); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('reg_date')); ?>:
	<?php echo GxHtml::encode($data->reg_date); ?>
	<br />

</div>