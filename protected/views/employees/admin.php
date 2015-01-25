<?php
/* @var $this EmployeesController */
/* @var $model Employees */

$this->breadcrumbs=array(
	'Employees'=>array('index'),
	'Manage Employees',
);

$this->menu=array(
	array('label'=>'List Employees', 'url'=>array('index')),
	array('label'=>'Create Employees', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#employees-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="subheader">
                <img src="images/hr.png" width="32" height="32"  /> HR Management 
                <div class="right">
                    <?php echo CHtml::link('<input type="button" class="view_btn" value="Create Employee" name="view"/>',array('employees/create'), $htmlOptions=array ('class'=>'noneanchor')); ?>
                    
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
	'id'=>'employees-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'name',
		'employee_number',
                array(
                  'name'=>'department_id',
                  'value'=>'$data->department[\'department_name\']',
                ),
                array(
                  'name'=>'category_id',
                  'value'=>'$data->category[\'category_name\']',
                ),
		'mobile',
		/*
                 'joining_date',
		'date_of_birth',
		'gender',
		'department_id',
		'category_id',
		'job_title',
		'qualification',
		'experience',
		'email',
		'address',
		'pin_code',
		'home_number',
		'pan_number',
		'salary_account_no',
		*/
		array(
			'class'=>'CButtonColumn',
                        'afterDelete'=>'function(link,success,data){ if(success) $("#statusMsg").html(data); }',
                        'template'=>'{update}{delete}',
		),
	),
)); ?>
