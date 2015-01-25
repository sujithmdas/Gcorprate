<?php
/* @var $this PaySlipController */
/* @var $model PaySlip */

$this->breadcrumbs=array(
	'Pay Slips'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PaySlip', 'url'=>array('index')),
	array('label'=>'Create PaySlip', 'url'=>array('create')),
	array('label'=>'Update PaySlip', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PaySlip', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PaySlip', 'url'=>array('admin')),
);
?>

<h1>View PaySlip #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'employee_id',
		'salary_date',
		'basic_pay',
		'deductions',
	),
)); ?>
