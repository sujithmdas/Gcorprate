<?php
/* @var $this StudentsController */
/* @var $model Students */

$this->breadcrumbs=array(
	'Students'=>array('index'),
	'Manage Students',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#students-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="subheader">
                <img src="images/Academics.png" /> Academics 
                <div class="right">
                    <?php echo CHtml::link('<input type="button" class="view_btn" value="Create Student" name="new"/>',array('students/create'), $htmlOptions=array ('class'=>'noneanchor')); ?>
                    
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
	'id'=>'students-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'admission_number',
		//'admission_date',
		'name',
		'parent_name',
		'parent_phone',
                array(
                    'name'=>'course_id',
                    'value'=>'$data->course[\'course_name\']',
                    'filter' => CHtml::listData(Courses::model()->findAll(), 'id', 'course_name'),
                ),
                array(
                    'name'=>'batch_id',
                    'value'=>'$data->batch[\'batch_name\']',
                    'filter' => CHtml::listData(Batches::model()->findAll(), 'id', 'batch_name'),
                ),
		array(
                    'name'=>'category_id',
                    'value'=>'$data->category[\'category_name\']',
                    'filter' => CHtml::listData(StudentCategory::model()->findAll(), 'id', 'category_name'),
                ),
		/*
		'gender',
		'address',
		'date_of_birth',
		'pincode',
		'home_number',
		'mobile',
                'category_id',
		
		*/
		array(
			'class'=>'CButtonColumn',
                        'afterDelete'=>'function(link,success,data){ if(success) $("#statusMsg").html(data); }',
		),
	),
)); ?>
