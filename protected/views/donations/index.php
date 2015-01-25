<?php
/* @var $this DonationsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Donations',
);

$this->menu=array(
	array('label'=>'Create Donations', 'url'=>array('create')),
	array('label'=>'Manage Donations', 'url'=>array('admin')),
);
?>

<h1>Donations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
