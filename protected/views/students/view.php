<?php
/* @var $this StudentsController */
/* @var $model Students */

$this->breadcrumbs=array(
	'Students'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Create Students', 'url'=>array('create')),
	array('label'=>'Update Students', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Students', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Students', 'url'=>array('admin')),
);
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
                

<!--<h1>View Students #<?php echo $model->id; ?></h1>-->
<div class="profiletop">
    <div style="float: left">
    <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/profile.png',"",array()); ?>
    </div>
    <div class="profiletopright">
        <h2>Parvathy</h2>
        <span>Course : dfgeer</span><br/>
        <span>Course : dfgeer</span><br/>
        <span>Course : dfgeer</span>
    </div>
</div>
<div class="clear"></div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'admission_number',
		'admission_date',
		'name',
		'email',
		'category_id',
		'gender',
		'address',
		'date_of_birth',
		'pincode',
		'parent_name',
		'parent_phone',
		'home_number',
		'mobile',
		'course_id',
		'batch_id',
	),
)); ?>
