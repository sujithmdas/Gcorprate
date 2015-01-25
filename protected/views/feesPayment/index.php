<?php
/* @var $this FeesPaymentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fees Payments',
);

$this->menu=array(
	array('label'=>'Create FeesPayment', 'url'=>array('create')),
	array('label'=>'Manage FeesPayment', 'url'=>array('admin')),
);
?>

<h1>Fees Payments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
