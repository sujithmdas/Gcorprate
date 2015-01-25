<?php
/* @var $this FinanceCategoryController */
/* @var $model FinanceCategory */

$this->breadcrumbs=array(
	'Finance Categories'=>array('index'),
	'Create Finance Category',
);

$this->menu=array(
	array('label'=>'List FinanceCategory', 'url'=>array('index')),
	array('label'=>'Manage FinanceCategory', 'url'=>array('admin')),
);
?>

<div class="subheader">
                <img src="images/fees.png" /> Fees 
                <div class="right">
                    <?php echo CHtml::link('<input type="button" class="view_btn" value="View Categories" name="view"/>',array('financeCategory/admin'), $htmlOptions=array ('class'=>'noneanchor')); ?>
                    
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