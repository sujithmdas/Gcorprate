<?php
/* @var $this SubjectsController */
/* @var $model Subjects */

$this->breadcrumbs=array(
	'Subjects'=>array('index'),
	'Update',
);

$this->menu=array(
	array('label'=>'Create Subjects', 'url'=>array('create')),
	array('label'=>'View Subjects', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Subjects', 'url'=>array('admin')),
);
?>

<div class="subheader">
                <img src="images/Academics.png" /> Academics 
                <div class="right">
                    <?php echo CHtml::link('<input type="button" class="view_btn" value="View Subjects" name="view"/>',array('subjects/admin'), $htmlOptions=array ('class'=>'noneanchor')); ?>
                    
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