<?php
/* @var $this LiabilitiesController */
/* @var $model Liabilities */

$this->breadcrumbs=array(
	'Liabilities'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Liabilities', 'url'=>array('index')),
	array('label'=>'Create Liabilities', 'url'=>array('create')),
	array('label'=>'Update Liabilities', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Liabilities', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Liabilities', 'url'=>array('admin')),
);
?>

<h1>View Liabilities #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'liability_name',
		'description',
		'amount',
		'status',
		'created_date',
	),
)); ?>
