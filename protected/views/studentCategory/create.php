<?php
/* @var $this StudentCategoryController */
/* @var $model StudentCategory */

$this->breadcrumbs=array(
	'Student Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StudentCategory', 'url'=>array('index')),
	array('label'=>'Manage StudentCategory', 'url'=>array('admin')),
);
?>

<h1>Create StudentCategory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>