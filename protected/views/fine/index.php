<?php
/* @var $this FineController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fines',
);

$this->menu=array(
	array('label'=>'Create Fine', 'url'=>array('create')),
	array('label'=>'Manage Fine', 'url'=>array('admin')),
);
?>

<h1>Fines</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
