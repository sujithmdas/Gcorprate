<?php
/* @var $this FineController */
/* @var $model Fine */

$this->breadcrumbs=array(
	'Fines'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Fine', 'url'=>array('index')),
	array('label'=>'Create Fine', 'url'=>array('create')),
	array('label'=>'Update Fine', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Fine', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Fine', 'url'=>array('admin')),
);
?>

<h1>View Fine #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fine_name',
		'days_after_due_date',
		'fine_amount',
		'mode',
		'status',
	),
)); ?>
