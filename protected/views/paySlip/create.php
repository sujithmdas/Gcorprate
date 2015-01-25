<?php
/* @var $this PaySlipController */
/* @var $model PaySlip */

$this->breadcrumbs=array(
	'Pay Slip'=>array('index'),
	'Create Pay Slip',
);

$this->menu=array(
	array('label'=>'List PaySlip', 'url'=>array('index')),
	array('label'=>'Manage PaySlip', 'url'=>array('admin')),
);
?>

<div class="subheader">
                <img src="images/hr.png" width="32" height="32"  /> HR Management 
                
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