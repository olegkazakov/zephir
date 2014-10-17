<?php

$this->breadcrumbs = array(
	DeviceStatus::label(2),
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' ' . DeviceStatus::label(), 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . DeviceStatus::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(DeviceStatus::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 