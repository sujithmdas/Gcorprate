<?php
/* @var $this LeaveSplitUpController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Leave Split Ups',
);

$this->menu=array(
	array('label'=>'Create LeaveSplitUp', 'url'=>array('create')),
	array('label'=>'Manage LeaveSplitUp', 'url'=>array('admin')),
);
?>

<h1>Leave Split Ups</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
