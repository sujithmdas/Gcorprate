<?php
/* @var $this EmployeeCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Employee Categories',
);

$this->menu=array(
	array('label'=>'Create EmployeeCategory', 'url'=>array('create')),
	array('label'=>'Manage EmployeeCategory', 'url'=>array('admin')),
);
?>

<h1>Employee Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
