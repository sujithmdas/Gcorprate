<?php
/* @var $this EmployeesController */
/* @var $model Employees */

$this->breadcrumbs=array(
	'Employees'=>array('index'),
	'Update Employee',
);

?>

<div class="subheader">
                <img src="images/hr.png" width="32" height="32"  /> HR Management 
                <div class="right">
                    <?php echo CHtml::link('<input type="button" class="view_btn" value="View Employees" name="view"/>',array('employees/admin'), $htmlOptions=array ('class'=>'noneanchor')); ?>
                    
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