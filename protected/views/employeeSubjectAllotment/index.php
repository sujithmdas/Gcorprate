<?php
/* @var $this EmployeeSubjectAllotmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Employee Subject Allotments',
);

$this->menu=array(
	array('label'=>'Create EmployeeSubjectAllotment', 'url'=>array('create')),
	array('label'=>'Manage EmployeeSubjectAllotment', 'url'=>array('admin')),
);
?>

<h1>Employee Subject Allotments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
