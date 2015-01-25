<?php
/* @var $this FeesDiscountController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fees Discounts',
);

$this->menu=array(
	array('label'=>'Create FeesDiscount', 'url'=>array('create')),
	array('label'=>'Manage FeesDiscount', 'url'=>array('admin')),
);
?>

<h1>Fees Discounts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
