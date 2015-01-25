<?php
/* @var $this EmployeeAttendanceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Employee Attendances',
);

$this->menu=array(
	array('label'=>'Create EmployeeAttendance', 'url'=>array('create')),
	array('label'=>'Manage EmployeeAttendance', 'url'=>array('admin')),
);
?>

<h1>Employee Attendances</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
