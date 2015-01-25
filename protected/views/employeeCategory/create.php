<?php
/* @var $this EmployeeCategoryController */
/* @var $model EmployeeCategory */

$this->breadcrumbs=array(
	'Employee Categories'=>array('index'),
	'Create Employee Category',
);

$this->menu=array(
	array('label'=>'List EmployeeCategory', 'url'=>array('index')),
	array('label'=>'Manage EmployeeCategory', 'url'=>array('admin')),
);
?>

<div class="subheader">
                <img src="images/hr.png" width="32" height="32"  /> HR Management 
                <div class="right">
                    <?php echo CHtml::link('<input type="button" class="view_btn" value="View Categories" name="view"/>',array('employeeCategory/admin'), $htmlOptions=array ('class'=>'noneanchor')); ?>
                    
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