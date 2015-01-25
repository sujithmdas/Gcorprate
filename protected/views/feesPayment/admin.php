<?php
/* @var $this FeesPaymentController */
/* @var $model FeesPayment */

$this->breadcrumbs=array(
	'Fees Payments'=>array('index'),
	'Manage Fees Payment',
);

$this->menu=array(
	array('label'=>'List FeesPayment', 'url'=>array('index')),
	array('label'=>'Create FeesPayment', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#fees-payment-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="subheader">
                <img src="images/fees.png" /> Fees 
                <div class="right">
                    <?php echo CHtml::link('<input type="button" class="view_btn" value="Pay Fees" name="new"/>',array('feesPayment/create'), $htmlOptions=array ('class'=>'noneanchor')); ?>
                    
                  </div>
                <hr/>
            </div>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

<div id="statusMsg">
<?php if(Yii::app()->user->hasFlash('success')):?>
    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
<?php endif; ?>
 
<?php if(Yii::app()->user->hasFlash('error')):?>
    <div class="flash-error">
        <?php echo Yii::app()->user->getFlash('error'); ?>
    </div>
<?php endif; ?>
</div>
                

<div class="search-form" >
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'fees-payment-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'fees_receipt_number',
                array(
                    'name'=>'batch_id',
                    'value'=>'$data->batch[\'batch_name\']',
                    'filter' => CHtml::listData(Batches::model()->findAll(), 'id', 'batch_name'),
                ),
		array(
                    'name'=>'student_id',
                    'value'=>'$data->student[\'name\']',
                    'filter' => CHtml::listData(Students::model()->findAll(), 'id', 'name'),
                ),
		array(
                    'name'=>'fees_collection_id',
                    'value'=>'$data->fees_collection[\'fees_collection_name\']',
                    'filter' => CHtml::listData(FeesCollection::model()->findAll(), 'id', 'fees_collection_name'),
                ),
		
		'fees_payment_date',
                array(
                    'name'=>'payment_mode',
                    'filter'=>array('Cash'=>'Cash', 'Cheque'=>'Cheque', 'DD'=>'DD'),
                ),
		
		'payment_remark',
		'paid_amount',
		
	),
)); ?>
