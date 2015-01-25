<?php
/* @var $this FeesCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fees Categories',
);

$this->menu=array(
	array('label'=>'Create FeesCategory', 'url'=>array('create')),
	array('label'=>'Manage FeesCategory', 'url'=>array('admin')),
);
?>

<h1>Fees Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
