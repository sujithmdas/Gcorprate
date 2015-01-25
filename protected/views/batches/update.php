<?php
/* @var $this BatchesController */
/* @var $model Batches */

$this->breadcrumbs=array(
	'Batches'=>array('index'),
	'Update Batch',
);

$this->menu=array(
	array('label'=>'List Batches', 'url'=>array('index')),
	array('label'=>'Create Batches', 'url'=>array('create')),
	array('label'=>'View Batches', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Batches', 'url'=>array('admin')),
);
?>

<div class="subheader">
                <img src="images/Academics.png" /> Academics
                <div class="right">
                    <?php echo CHtml::link('<input type="button" class="view_btn" value="View Batches" name="view"/>',array('batches/admin'), $htmlOptions=array ('class'=>'noneanchor')); ?>
                    
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