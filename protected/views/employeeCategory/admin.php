<?php
/* @var $this EmployeeCategoryController */
/* @var $model EmployeeCategory */

$this->breadcrumbs=array(
	'Employee Categories'=>array('index'),
	'Manage Employee Category',
);

$this->menu=array(
	array('label'=>'List EmployeeCategory', 'url'=>array('index')),
	array('label'=>'Create EmployeeCategory', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#employee-category-grid').yiiGridView('update', {
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
	'id'=>'employee-category-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'category_name',
		'prefix',
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
