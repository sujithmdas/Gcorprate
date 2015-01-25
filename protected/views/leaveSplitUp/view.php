<?php
/* @var $this LeaveSplitUpController */
/* @var $model LeaveSplitUp */

$this->breadcrumbs=array(
	'Leave Split Ups'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List LeaveSplitUp', 'url'=>array('index')),
	array('label'=>'Create LeaveSplitUp', 'url'=>array('create')),
	array('label'=>'Update LeaveSplitUp', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LeaveSplitUp', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LeaveSplitUp', 'url'=>array('admin')),
);
?>

<h1>View LeaveSplitUp #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'leave_split_up',
		'deduction',
		'deduction_mode',
		'status',
	),
)); ?>
