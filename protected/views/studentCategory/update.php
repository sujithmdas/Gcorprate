<?php
/* @var $this StudentCategoryController */
/* @var $model StudentCategory */

$this->breadcrumbs=array(
	'Student Categories'=>array('index'),
	'Update Student Category',
);

$this->menu=array(
	array('label'=>'List StudentCategory', 'url'=>array('index')),
	array('label'=>'Create StudentCategory', 'url'=>array('create')),
	array('label'=>'View StudentCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StudentCategory', 'url'=>array('admin')),
);
?>

<div class="subheader">
                <img src="images/Academics.png" /> Academics 
                
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