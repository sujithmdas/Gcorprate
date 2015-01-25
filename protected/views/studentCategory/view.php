<?php
/* @var $this StudentCategoryController */
/* @var $model StudentCategory */

$this->breadcrumbs=array(
	'Student Categories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StudentCategory', 'url'=>array('index')),
	array('label'=>'Create StudentCategory', 'url'=>array('create')),
	array('label'=>'Update StudentCategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete StudentCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StudentCategory', 'url'=>array('admin')),
);
?>

<h1>View StudentCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'category_name',
		'status',
	),
)); ?>
