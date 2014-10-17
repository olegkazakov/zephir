<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->device_id)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->device_id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'device_id',
array(
			'name' => 'official',
			'type' => 'raw',
			'value' => $model->official !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->official)), array('official/view', 'id' => GxActiveRecord::extractPkValue($model->official, true))) : null,
			),
array(
			'name' => 'deviceModel',
			'type' => 'raw',
			'value' => $model->deviceModel !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->deviceModel)), array('deviceType/view', 'id' => GxActiveRecord::extractPkValue($model->deviceModel, true))) : null,
			),
'serial_number',
'country',
'postal_code',
'region',
'city',
'address',
'total_income',
'total_expence',
'lat',
'lon',
array(
			'name' => 'status',
			'type' => 'raw',
			'value' => $model->status !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->status)), array('deviceStatus/view', 'id' => GxActiveRecord::extractPkValue($model->status, true))) : null,
			),
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('deviceParts')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->deviceParts as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('devicePart/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>