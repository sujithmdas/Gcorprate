<?php
/* @var $this PayrollCategoryController */
/* @var $model PayrollCategory */

$this->breadcrumbs=array(
	'Payroll Categories'=>array('index'),
	'Manage Payroll Categories',
);

$this->menu=array(
	array('label'=>'List PayrollCategory', 'url'=>array('index')),
	array('label'=>'Create PayrollCategory', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#payroll-category-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="subheader">
                <img src="images/hr.png" width="32" height="32"  /> HR Management 
                
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

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'payroll-category-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'category_name',
		'percentage',
		
                array(
                  'name'=>'percentage_of',
                  'value'=>'$data->category[\'category_name\']',
                ),
                array(
                  'name'=>'is_deduction',
                  'value'=>'($data->is_deduction == "N")?"No":"Yes"',
                ),
                array(
                  'name'=>'status',
                  'value'=>'($data->status == "A")?"Active":"Inactive"',
                ),
		array(
			'class'=>'CButtonColumn',
                        'afterDelete'=>'function(link,success,data){ if(success) $("#statusMsg").html(data); }',
                        'template'=>'{update}{delete}',
                        'buttons'=>array(
                            'delete'=>array(
                                'visible'=>'$data->status == "A"',
                            ),
                            ),
		),
	),
)); ?>
