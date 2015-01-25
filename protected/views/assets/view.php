<?php
/* @var $this AssetsController */
/* @var $model Assets */

$this->breadcrumbs=array(
	'Assets'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Assets', 'url'=>array('index')),
	array('label'=>'Create Assets', 'url'=>array('create')),
	array('label'=>'Update Assets', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Assets', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Assets', 'url'=>array('admin')),
);
?>

<h1>View Assets #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'asset_name',
		'description',
		'amount',
		'status',
		'created_date',
	),
)); ?>
