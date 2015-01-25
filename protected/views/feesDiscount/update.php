<?php
/* @var $this FeesDiscountController */
/* @var $model FeesDiscount */

$this->breadcrumbs=array(
	'Fees Discounts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update Fees Discount',
);

?>

<div class="subheader">
                <img src="images/fees.png" /> Fees 
                <div class="right">
                    <?php echo CHtml::link('<input type="button" class="view_btn" value="View Discounts" name="view"/>',array('feesDiscounts/admin'), $htmlOptions=array ('class'=>'noneanchor')); ?>
                    
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