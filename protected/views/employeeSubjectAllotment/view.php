<?php
/* @var $this EmployeeSubjectAllotmentController */
/* @var $model EmployeeSubjectAllotment */

$this->breadcrumbs=array(
	'Employee Subject Allotments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EmployeeSubjectAllotment', 'url'=>array('index')),
	array('label'=>'Create EmployeeSubjectAllotment', 'url'=>array('create')),
	array('label'=>'Update EmployeeSubjectAllotment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EmployeeSubjectAllotment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EmployeeSubjectAllotment', 'url'=>array('admin')),
);
?>

<h1>View EmployeeSubjectAllotment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'batch_id',
		'subject_id',
		'employee_id',
	),
)); ?>
