<?php
/* @var $this FeesCollectionController */
/* @var $model FeesCollection */

$this->breadcrumbs=array(
	'Fees Collections'=>array('index'),
	'Manage Fees Collections',
);

$this->menu=array(
	array('label'=>'List FeesCollection', 'url'=>array('index')),
	array('label'=>'Create FeesCollection', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#fees-collection-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="subheader">
                <img src="images/fees.png" /> Fees 
                <div class="right">
                    <?php echo CHtml::link('<input type="button" class="view_btn" value="Create Fees Collection" name="new"/>',array('feesCollection/create'), $htmlOptions=array ('class'=>'noneanchor')); ?>
                    
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
	'id'=>'fees-collection-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'fees_collection_name',
                array(
                    'name'=>'fees_category_id',
                    'value'=>'$data->feesCategory[\'fees_category_name\']',
                ),
                array(
                    'name'=>'fine_id',
                    'value'=>'$data->fine[\'fine_name\']',
                ),
		
		'start_date',
		'end_date',
		'due_date',
		array(
			'class'=>'CButtonColumn',
                        'afterDelete'=>'function(link,success,data){ if(success) $("#statusMsg").html(data); }',
                        'template'=>'{update}{delete}',
		),
	),
)); ?>
