<?php
/* @var $this FeesCollectionController */
/* @var $model FeesCollection */

$this->breadcrumbs=array(
	'Fees Collections'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FeesCollection', 'url'=>array('index')),
	array('label'=>'Create FeesCollection', 'url'=>array('create')),
	array('label'=>'Update FeesCollection', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FeesCollection', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FeesCollection', 'url'=>array('admin')),
);
?>

<h1>View FeesCollection #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fees_collection_name',
		'fees_category_id',
		'fine_id',
		'start_date',
		'end_date',
		'due_date',
		'status',
	),
)); ?>
