<?php
/* @var $this FinanceCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Finance Categories',
);

$this->menu=array(
	array('label'=>'Create FinanceCategory', 'url'=>array('create')),
	array('label'=>'Manage FinanceCategory', 'url'=>array('admin')),
);
?>

<h1>Finance Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
