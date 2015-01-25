<?php
/* @var $this EmployeeDepartmentController */
/* @var $model EmployeeDepartment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-department-form',
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
		<?php echo $form->labelEx($model,'department_name'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'department_name',array('class'=>'input','maxlength'=>45)); ?>
		<?php echo $form->error($model,'department_name'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'department_code'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'department_code',array('class'=>'input','maxlength'=>5)); ?>
		<?php echo $form->error($model,'department_code'); ?>
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
                &nbsp;
            </div>
            <div class="form_field w_280">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'save')); ?>
            </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->