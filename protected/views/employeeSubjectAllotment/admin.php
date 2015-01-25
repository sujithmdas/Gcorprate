<?php
/* @var $this EmployeeSubjectAllotmentController */
/* @var $model EmployeeSubjectAllotment */

$this->breadcrumbs=array(
	'Employee Subject Allotments'=>array('index'),
	'Manage Subject Allotments',
);

$this->menu=array(
	array('label'=>'List EmployeeSubjectAllotment', 'url'=>array('index')),
	array('label'=>'Create EmployeeSubjectAllotment', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#employee-subject-allotment-grid').yiiGridView('update', {
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
	'id'=>'employee-subject-allotment-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
            array(
                'name'=>'batch_id',
                'filter' => CHtml::listData(Batches::model()->findAll(array('condition'=>'status=:st', 'params'=>array(':st'=>'A'))), 'id', 'batch_name'),
                'value'=>'$data->batch[\'batch_name\']'
            ),
            array(
                'name'=>'subject_id',
                'filter' => CHtml::listData(Subjects::model()->findAll(array('condition'=>'status=:st', 'params'=>array(':st'=>'A'))), 'id', 'subject_name'),
                'value'=>'$data->subject[\'subject_name\']'
            ),
            array(
                'name'=>'employee_id',
                'filter' => CHtml::listData(Employees::model()->findAll(array('condition'=>'status=:st', 'params'=>array(':st'=>'A'))), 'id', 'name'),
                'value'=>'$data->employee[\'name\']'
            ),
		
		array(
			'class'=>'CButtonColumn',
                        'afterDelete'=>'function(link,success,data){ if(success) $("#statusMsg").html(data); }',
                        'template'=>'{update}{delete}',
		),
	),
)); ?>
