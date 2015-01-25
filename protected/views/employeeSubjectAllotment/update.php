<?php
/* @var $this EmployeeSubjectAllotmentController */
/* @var $model EmployeeSubjectAllotment */

$this->breadcrumbs=array(
	'Employee Subject Allotments'=>array('index'),
	'Update Subject Allotment',
);

$this->menu=array(
	array('label'=>'List EmployeeSubjectAllotment', 'url'=>array('index')),
	array('label'=>'Create EmployeeSubjectAllotment', 'url'=>array('create')),
	array('label'=>'View EmployeeSubjectAllotment', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EmployeeSubjectAllotment', 'url'=>array('admin')),
);
?>

<div class="subheader">
                <img src="images/hr.png" width="32" height="32"  /> HR Management 
                <div class="right">
                    <?php echo CHtml::link('<input type="button" class="view_btn" value="View Subjectment Allotment" name="view"/>',array('employeeSubjectAllotment/admin'), $htmlOptions=array ('class'=>'noneanchor')); ?>
                    
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

<?php $this->renderPartial('_form', array('model'=>$model)); ?>