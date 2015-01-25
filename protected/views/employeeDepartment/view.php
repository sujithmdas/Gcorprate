<?php
/* @var $this EmployeeDepartmentController */
/* @var $model EmployeeDepartment */

$this->breadcrumbs=array(
	'Employee Departments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EmployeeDepartment', 'url'=>array('index')),
	array('label'=>'Create EmployeeDepartment', 'url'=>array('create')),
	array('label'=>'Update EmployeeDepartment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EmployeeDepartment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EmployeeDepartment', 'url'=>array('admin')),
);
?>

<h1>View EmployeeDepartment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'department_name',
		'department_code',
		'status',
	),
)); ?>
