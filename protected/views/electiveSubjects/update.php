<?php
/* @var $this ElectiveSubjectsController */
/* @var $model ElectiveSubjects */

$this->breadcrumbs=array(
	'Elective Subjects'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ElectiveSubjects', 'url'=>array('index')),
	array('label'=>'Create ElectiveSubjects', 'url'=>array('create')),
	array('label'=>'View ElectiveSubjects', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ElectiveSubjects', 'url'=>array('admin')),
);
?>

<h1>Update ElectiveSubjects <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>