<?php
/* @var $this EmployeeAttendanceController */
/* @var $model EmployeeAttendance */

$this->breadcrumbs=array(
	'Employee Attendances'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EmployeeAttendance', 'url'=>array('index')),
	array('label'=>'Create EmployeeAttendance', 'url'=>array('create')),
	array('label'=>'Update EmployeeAttendance', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EmployeeAttendance', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EmployeeAttendance', 'url'=>array('admin')),
);
?>

<h1>View EmployeeAttendance #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'employee_id',
		'reason',
		'leave_type_id',
		'leave_split_up_id',
		'leave_date',
	),
)); ?>
