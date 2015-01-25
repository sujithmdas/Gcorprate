<?php
/* @var $this ElectiveSubjectsController */
/* @var $model ElectiveSubjects */

$this->breadcrumbs=array(
	'Elective Subjects'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ElectiveSubjects', 'url'=>array('index')),
	array('label'=>'Create ElectiveSubjects', 'url'=>array('create')),
	array('label'=>'Update ElectiveSubjects', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ElectiveSubjects', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ElectiveSubjects', 'url'=>array('admin')),
);
?>

<h1>View ElectiveSubjects #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'subject_name',
		'subject_code',
		'status',
	),
)); ?>
