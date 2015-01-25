<?php
/* @var $this PayrollCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Payroll Categories',
);

$this->menu=array(
	array('label'=>'Create PayrollCategory', 'url'=>array('create')),
	array('label'=>'Manage PayrollCategory', 'url'=>array('admin')),
);
?>

<h1>Payroll Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
