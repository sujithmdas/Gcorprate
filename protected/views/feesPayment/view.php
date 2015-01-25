<?php
/* @var $this FeesPaymentController */
/* @var $model FeesPayment */

$this->breadcrumbs=array(
	'Fees Payments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FeesPayment', 'url'=>array('index')),
	array('label'=>'Create FeesPayment', 'url'=>array('create')),
	array('label'=>'Update FeesPayment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FeesPayment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FeesPayment', 'url'=>array('admin')),
);
?>

<h1>View FeesPayment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fees_receipt_number',
		'batch_id',
		'student_id',
		'fees_collection_id',
		'fees_payment_date',
		'payment_mode',
		'payment_remark',
		'paid_amount',
		'status',
	),
)); ?>
