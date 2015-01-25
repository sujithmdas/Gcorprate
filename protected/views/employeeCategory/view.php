<?php
/* @var $this EmployeeCategoryController */
/* @var $model EmployeeCategory */

$this->breadcrumbs=array(
	'Employee Categories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EmployeeCategory', 'url'=>array('index')),
	array('label'=>'Create EmployeeCategory', 'url'=>array('create')),
	array('label'=>'Update EmployeeCategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EmployeeCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EmployeeCategory', 'url'=>array('admin')),
);
?>

<h1>View EmployeeCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'category_name',
		'prefix',
		'status',
	),
)); ?>
