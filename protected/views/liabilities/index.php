<?php
/* @var $this LiabilitiesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Liabilities',
);

$this->menu=array(
	array('label'=>'Create Liabilities', 'url'=>array('create')),
	array('label'=>'Manage Liabilities', 'url'=>array('admin')),
);
?>

<h1>Liabilities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
