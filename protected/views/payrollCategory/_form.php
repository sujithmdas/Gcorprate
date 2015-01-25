<?php
/* @var $this PayrollCategoryController */
/* @var $model PayrollCategory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'payroll-category-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
        'enableClientValidation'=>true,
            'clientOptions'=>array(
                    'validateOnSubmit'=>true,
            ),
)); ?>

	
	<?php echo $form->errorSummary($model); ?>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'category_name'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'category_name',array('class'=>'input','maxlength'=>45)); ?>
		<?php echo $form->error($model,'category_name'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'percentage'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'percentage', array('class'=>'input')); ?>
		<?php echo $form->error($model,'percentage'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'percentage_of'); ?>
            </div>
            <div class="form_field w_280">
                <?php
                 $list = PayrollCategory::model()->findAll(array('condition'=>'status=:st', 'params'=>array(':st'=>'A')));

                $categories = CHtml::listData($list, 
                           'id', 'category_name');
                ?>
		
		<?php echo $form->dropDownList($model,'percentage_of',$categories, array('empty' => '', 'class'=>'select')); ?>
		<?php echo $form->error($model,'percentage_of'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'is_deduction'); ?>
            </div>
            <div class="form_field w_280">
                <?php echo $form->dropDownList($model,'is_deduction',array('N'=>'No','Y'=>'Yes'), array('class'=>'select')); ?>
		<?php echo $form->error($model,'is_deduction'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'status'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->dropDownList($model,'status',array('A'=>'Active','I'=>'Inactive'), array('class'=>'select')); ?>
		<?php echo $form->error($model,'status'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
                </div>
            <div class="form_field w_280">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'save')); ?>
            </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->