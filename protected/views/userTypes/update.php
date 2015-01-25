<?php
/* @var $this UserTypesController */
/* @var $model UserTypes */

$this->breadcrumbs=array(
	'User Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserTypes', 'url'=>array('index')),
	array('label'=>'Create UserTypes', 'url'=>array('create')),
	array('label'=>'View UserTypes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UserTypes', 'url'=>array('admin')),
);
?>

<h1>Update UserTypes <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>