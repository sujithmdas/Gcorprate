<?php
/* @var $this DonationsController */
/* @var $model Donations */

$this->breadcrumbs=array(
	'Donations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Donations', 'url'=>array('index')),
	array('label'=>'Create Donations', 'url'=>array('create')),
	array('label'=>'Update Donations', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Donations', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Donations', 'url'=>array('admin')),
);
?>

<h1>View Donations #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'donor_name',
		'description',
		'donation_date',
		'amount',
		'status',
	),
)); ?>
