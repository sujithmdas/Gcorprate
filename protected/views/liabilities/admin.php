<?php
/* @var $this LiabilitiesController */
/* @var $model Liabilities */

$this->breadcrumbs=array(
	'Liabilities'=>array('index'),
	'Manage Liabilities',
);

$this->menu=array(
	array('label'=>'List Liabilities', 'url'=>array('index')),
	array('label'=>'Create Liabilities', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#liabilities-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="subheader">
                <img src="images/fees.png" /> Fees 
                <div class="right">
                    <?php echo CHtml::link('<input type="button" class="view_btn" value="Create Liability" name="new"/>',array('liabilities/create'), $htmlOptions=array ('class'=>'noneanchor')); ?>
                    
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

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'liabilities-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'liability_name',
		'description',
		'amount',
		'created_date',
		array(
			'class'=>'CButtonColumn',
                        'afterDelete'=>'function(link,success,data){ if(success) $("#statusMsg").html(data); }',
                        'template'=>'{update}{delete}',
		),
	),
)); ?>
