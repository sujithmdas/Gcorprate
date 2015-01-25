<?php
/* @var $this FeesDiscountController */
/* @var $model FeesDiscount */

$this->breadcrumbs=array(
	'Fees Discounts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FeesDiscount', 'url'=>array('index')),
	array('label'=>'Create FeesDiscount', 'url'=>array('create')),
	array('label'=>'Update FeesDiscount', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FeesDiscount', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FeesDiscount', 'url'=>array('admin')),
);
?>

<h1>View FeesDiscount #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'discount_name',
		'discount_amount',
		'status',
	),
)); ?>
