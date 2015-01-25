<?php
/* @var $this EmployeeDepartmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Employee Departments',
);

$this->menu=array(
	array('label'=>'Create EmployeeDepartment', 'url'=>array('create')),
	array('label'=>'Manage EmployeeDepartment', 'url'=>array('admin')),
);
?>

<h1>Employee Departments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
