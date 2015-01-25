<?php
/* @var $this FeesCollectionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fees Collections',
);

$this->menu=array(
	array('label'=>'Create FeesCollection', 'url'=>array('create')),
	array('label'=>'Manage FeesCollection', 'url'=>array('admin')),
);
?>

<h1>Fees Collections</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
