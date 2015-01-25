<?php
/* @var $this ElectiveSubjectsController */
/* @var $model ElectiveSubjects */

$this->breadcrumbs=array(
	'Elective Subjects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ElectiveSubjects', 'url'=>array('index')),
	array('label'=>'Manage ElectiveSubjects', 'url'=>array('admin')),
);
?>

<h1>Create ElectiveSubjects</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>