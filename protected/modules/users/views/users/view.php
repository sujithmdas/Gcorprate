<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'Update Users', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Users', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<div class="subheader">
    <img src="images/Academics.png" /> Settings 
    <div class="right">
        <?php echo CHtml::link('<input type="button" class="view_btn" value="Create Users" name="new"/>', array('users/create'), $htmlOptions = array('class' => 'noneanchor')); ?>
        <?php echo CHtml::link('<input type="button" class="view_btn" value="Update Users" name="new"/>', array('users/update',  'id'=>$model->id), $htmlOptions = array('class' => 'noneanchor')); ?>
        <?php echo CHtml::link('<input type="button" class="view_btn" value="Delete Users" name="new"/>', '#', array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'class' => 'noneanchor')); ?>
        <?php echo CHtml::link('<input type="button" class="view_btn" value="View Users" name="new"/>', array('users/admin'), $htmlOptions = array('class' => 'noneanchor')); ?>

    </div>
    <hr/>
</div>
<?php if (isset($this->breadcrumbs)): ?>
        <?php
        $this->widget('zii.widgets.CBreadcrumbs', array(
            'links' => $this->breadcrumbs,
        ));
        ?><!-- breadcrumbs -->
        <?php endif ?>

<div id="statusMsg">
        <?php if (Yii::app()->user->hasFlash('success')): ?>
            <div class="flash-success">
            <?php echo Yii::app()->user->getFlash('success'); ?>
            </div>
        <?php endif; ?>

        <?php if (Yii::app()->user->hasFlash('error')): ?>
            <div class="flash-error">
            <?php echo Yii::app()->user->getFlash('error'); ?>
            </div>
    <?php endif; ?>
</div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'username',
		'user_type_id',
		'status',
		'student_id',
	),
)); ?>
