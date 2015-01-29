<?php
    /* @var $this UsersController */
    /* @var $model Users */

    $this->breadcrumbs = array(
        'Users' => array('index'),
        'Manage Users',
    );

    $this->menu = array(
        array('label' => 'List Users', 'url' => array('index')),
        array('label' => 'Create Users', 'url' => array('create')),
    );

    Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#users-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="subheader">
    <img src="images/Academics.png" /> Settings 
    <div class="right">
        <?php echo CHtml::link('<input type="button" class="view_btn" value="Create User" name="new"/>', array('users/create'), $htmlOptions = array('class' => 'noneanchor')); ?>

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

<?php
    $this->widget('zii.widgets.grid.CGridView', array(
        'id' => 'users-grid',
        'dataProvider' => $model->search(),
        'filter' => $model,
        'columns' => array(
            'name',
            'username',
            array(
                    'name'=>'user_type_id',
                    'value'=>'$data->usertype[\'designation\']',
                    'filter' => CHtml::listData(UserTypes::model()->findAll(), 'id', 'designation'),
                ),
            array(
                    'name'=>'status',
                    'value'=>'$data->status == "A"? "Active":"Inactive"',
                    'filter' => array('A'=>'Active', 'I'=>'Inactive'),
                ),
            /*
              'student_id',
             */
            array(
                'class' => 'CButtonColumn',
            ),
        ),
    ));
?>
