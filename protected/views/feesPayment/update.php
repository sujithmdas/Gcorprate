<?php
/* @var $this FeesPaymentController */
/* @var $model FeesPayment */

$this->breadcrumbs=array(
	'Fees Payments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FeesPayment', 'url'=>array('index')),
	array('label'=>'Create FeesPayment', 'url'=>array('create')),
	array('label'=>'View FeesPayment', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FeesPayment', 'url'=>array('admin')),
);
?>

<h1>Update FeesPayment <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>