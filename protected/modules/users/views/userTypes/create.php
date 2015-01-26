<?php
/* @var $this UserTypesController */
/* @var $model UserTypes */

$this->breadcrumbs=array(
	'User Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserTypes', 'url'=>array('index')),
	array('label'=>'Manage UserTypes', 'url'=>array('admin')),
);
?>

<h1>Create UserTypes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>