<?php
/* @var $this StudentCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Student Categories',
);

$this->menu=array(
	array('label'=>'Create StudentCategory', 'url'=>array('create')),
	array('label'=>'Manage StudentCategory', 'url'=>array('admin')),
);
?>

<h1>Student Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
