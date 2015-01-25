<?php
/* @var $this FinanceCategoryController */
/* @var $model FinanceCategory */

$this->breadcrumbs=array(
	'Finance Categories'=>array('index'),
	'Manage Finance Category',
);

?>

<div class="subheader">
                <img src="images/fees.png" /> Fees 
                
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
	'id'=>'finance-category-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'category_name',
		'description',
                array( 
                    'name'=>'is_income',
                    'header'=>'Incoime/Expense',
                    'value'=>'($data->is_income == 1)?"Income":"Expense"',
                     ),
		//'is_income',
		//'is_editable',
		//'status',
		array(
			'class'=>'CButtonColumn',
                        'afterDelete'=>'function(link,success,data){ if(success) $("#statusMsg").html(data); }',
                        'template'=>'{update}{delete}',
                        'buttons'=>array(
                            'update'=>array(
                                'visible'=>'$data->is_editable == 1',
                            ),
                            'delete'=>array(
                                'visible'=>'$data->is_editable == 1',
                            ),
                            ),
		),
            
	),
)); ?>
