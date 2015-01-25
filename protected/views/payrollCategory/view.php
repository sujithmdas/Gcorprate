<?php
/* @var $this PayrollCategoryController */
/* @var $model PayrollCategory */

$this->breadcrumbs=array(
	'Payroll Categories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PayrollCategory', 'url'=>array('index')),
	array('label'=>'Create PayrollCategory', 'url'=>array('create')),
	array('label'=>'Update PayrollCategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PayrollCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PayrollCategory', 'url'=>array('admin')),
);
?>

<h1>View PayrollCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'category_name',
		'percentage',
		'percentage_of',
		'is_deduction',
		'status',
	),
)); ?>
