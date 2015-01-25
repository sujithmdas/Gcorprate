<?php
/* @var $this FinanceCategoryController */
/* @var $model FinanceCategory */

$this->breadcrumbs=array(
	'Finance Categories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FinanceCategory', 'url'=>array('index')),
	array('label'=>'Create FinanceCategory', 'url'=>array('create')),
	array('label'=>'Update FinanceCategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FinanceCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FinanceCategory', 'url'=>array('admin')),
);
?>

<h1>View FinanceCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'category_name',
		'description',
		'is_income',
		'is_editable',
		'status',
	),
)); ?>
