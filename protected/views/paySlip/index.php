<?php
/* @var $this PaySlipController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pay Slips',
);

$this->menu=array(
	array('label'=>'Create PaySlip', 'url'=>array('create')),
	array('label'=>'Manage PaySlip', 'url'=>array('admin')),
);
?>

<h1>Pay Slips</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
