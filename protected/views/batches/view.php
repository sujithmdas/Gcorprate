<?php
/* @var $this BatchesController */
/* @var $model Batches */

$this->breadcrumbs=array(
	'Batches'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Batches', 'url'=>array('index')),
	array('label'=>'Create Batches', 'url'=>array('create')),
	array('label'=>'Update Batches', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Batches', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Batches', 'url'=>array('admin')),
);
?>

<h1>View Batches #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'batch_name',
		'start_date',
		'end_date',
		'status',
		'course_id',
	),
)); ?>
