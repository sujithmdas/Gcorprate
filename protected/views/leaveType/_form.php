<?php
/* @var $this LeaveTypeController */
/* @var $model LeaveType */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'leave-type-form',
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
		<?php echo $form->labelEx($model,'leave_name'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'leave_name',array('class'=>'input','maxlength'=>45)); ?>
		<?php echo $form->error($model,'leave_name'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'leave_code'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'leave_code',array('class'=>'input','maxlength'=>10)); ?>
		<?php echo $form->error($model,'leave_code'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'maximum_count'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'maximum_count', array('class'=>'input')); ?>
		<?php echo $form->error($model,'maximum_count'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'carry_forward'); ?>
            </div>
            <div class="form_field w_280">
                <?php echo $form->checkBox($model,'carry_forward',array('value' => 'Y', 'uncheckValue'=>'N')); ?>
                <?php //echo $form->textField($model,'carry_forward',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'carry_forward'); ?>
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