<?php
/* @var $this PaySlipController */
/* @var $model PaySlip */

$this->breadcrumbs=array(
	'Pay Slips'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PaySlip', 'url'=>array('index')),
	array('label'=>'Create PaySlip', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pay-slip-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="subheader">
                <img src="images/hr.png" width="32" height="32"  /> HR Management 
                <div class="right">
                    <?php echo CHtml::link('<input type="button" class="view_btn" value="Create Payslip" name="view"/>',array('paySlip/create'), $htmlOptions=array ('class'=>'noneanchor')); ?>
                    
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

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pay-slip-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
                array(
                  'name'=>'employee_id',
                  'value'=>'$data->employee[\'name\']',
                ),
		'salary_date',
		'basic_pay',
		'deductions',
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{update}{delete}',
		),
	),
)); ?>
