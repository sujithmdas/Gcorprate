<?php
/* @var $this ElectiveSubjectsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Elective Subjects',
);

$this->menu=array(
	array('label'=>'Create ElectiveSubjects', 'url'=>array('create')),
	array('label'=>'Manage ElectiveSubjects', 'url'=>array('admin')),
);
?>

<h1>Elective Subjects</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
