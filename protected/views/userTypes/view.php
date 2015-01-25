<?php
/* @var $this UserTypesController */
/* @var $model UserTypes */

$this->breadcrumbs=array(
	'User Types'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UserTypes', 'url'=>array('index')),
	array('label'=>'Create UserTypes', 'url'=>array('create')),
	array('label'=>'Update UserTypes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserTypes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserTypes', 'url'=>array('admin')),
);
?>

<h1>View UserTypes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'designation',
		'user_type',
	),
)); ?>
