<?php
/* @var $this LeaveTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Leave Types',
);

$this->menu=array(
	array('label'=>'Create LeaveType', 'url'=>array('create')),
	array('label'=>'Manage LeaveType', 'url'=>array('admin')),
);
?>

<h1>Leave Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
