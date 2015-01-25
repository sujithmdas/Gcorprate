<?php
/* @var $this FeesCategoryController */
/* @var $model FeesCategory */

$this->breadcrumbs=array(
	'Fees Categories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FeesCategory', 'url'=>array('index')),
	array('label'=>'Create FeesCategory', 'url'=>array('create')),
	array('label'=>'Update FeesCategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FeesCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FeesCategory', 'url'=>array('admin')),
);
?>

<h1>View FeesCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fees_category_name',
		'description',
		'status',
	),
)); ?>
