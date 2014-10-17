<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('address_book_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->address_book_id), array('view', 'id' => $data->address_book_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('user_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->user)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('type')); ?>:
	<?php echo GxHtml::encode($data->type); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('postal_code')); ?>:
	<?php echo GxHtml::encode($data->postal_code); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('region')); ?>:
	<?php echo GxHtml::encode($data->region); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('city')); ?>:
	<?php echo GxHtml::encode($data->city); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('address')); ?>:
	<?php echo GxHtml::encode($data->address); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('comment')); ?>:
	<?php echo GxHtml::encode($data->comment); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('consist')); ?>:
	<?php echo GxHtml::encode($data->consist); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('country')); ?>:
	<?php echo GxHtml::encode($data->country); ?>
	<br />
	*/ ?>

</div>