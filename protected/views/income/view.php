<?php
/* @var $this IncomeController */
/* @var $model Income */

$this->breadcrumbs=array(
	'Incomes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Income', 'url'=>array('index')),
	array('label'=>'Create Income', 'url'=>array('create')),
	array('label'=>'Update Income', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Income', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Income', 'url'=>array('admin')),
);
?>

<h1>View Income #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'income_title',
		'description',
		'amount',
		'income_date',
		'finance_category_id',
	),
)); ?>
