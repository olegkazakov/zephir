<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->doc_id)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->doc_id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'doc_id',
array(
			'name' => 'official',
			'type' => 'raw',
			'value' => $model->official !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->official)), array('official/view', 'id' => GxActiveRecord::extractPkValue($model->official, true))) : null,
			),
'link',
array(
			'name' => 'manager',
			'type' => 'raw',
			'value' => $model->manager !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->manager)), array('manager/view', 'id' => GxActiveRecord::extractPkValue($model->manager, true))) : null,
			),
array(
			'name' => 'status',
			'type' => 'raw',
			'value' => $model->status !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->status)), array('docStatus/view', 'id' => GxActiveRecord::extractPkValue($model->status, true))) : null,
			),
'comment',
	),
)); ?>

