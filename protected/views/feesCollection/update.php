<?php
/* @var $this FeesCollectionController */
/* @var $model FeesCollection */

$this->breadcrumbs=array(
	'Fees Collections'=>array('index'),
	'Update Fees Collection',
);

$this->menu=array(
	array('label'=>'List FeesCollection', 'url'=>array('index')),
	array('label'=>'Create FeesCollection', 'url'=>array('create')),
	array('label'=>'View FeesCollection', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FeesCollection', 'url'=>array('admin')),
);
?>

<div class="subheader">
                <img src="images/fees.png" /> Fees 
                <div class="right">
                    <?php echo CHtml::link('<input type="button" class="view_btn" value="View Fees Collection" name="view"/>',array('feesCollection/admin'), $htmlOptions=array ('class'=>'noneanchor')); ?>
                    
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