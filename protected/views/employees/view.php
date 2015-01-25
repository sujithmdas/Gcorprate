<?php
/* @var $this EmployeesController */
/* @var $model Employees */

$this->breadcrumbs=array(
	'Employees'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Employees', 'url'=>array('index')),
	array('label'=>'Create Employees', 'url'=>array('create')),
	array('label'=>'Update Employees', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Employees', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Employees', 'url'=>array('admin')),
);
?>

<h1>View Employees #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'employee_number',
		'joining_date',
		'date_of_birth',
		'gender',
		'department_id',
		'category_id',
		'job_title',
		'qualification',
		'experience',
		'email',
		'address',
		'pin_code',
		'mobile',
		'home_number',
		'pan_number',
		'salary_account_no',
	),
)); ?>
