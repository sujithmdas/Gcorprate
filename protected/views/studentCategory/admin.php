<?php
/* @var $this StudentCategoryController */
/* @var $model StudentCategory */

$this->breadcrumbs=array(
	'Student Categories'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#student-category-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
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

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'student-category-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'category_name',
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{update}{delete}',
		),
	),
)); ?>
