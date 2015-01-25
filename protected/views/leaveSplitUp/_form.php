<?php
/* @var $this LeaveSplitUpController */
/* @var $model LeaveSplitUp */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'leave-split-up-form',
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
		<?php echo $form->labelEx($model,'leave_split_up'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'leave_split_up',array('class'=>'input','maxlength'=>45)); ?>
		<?php echo $form->error($model,'leave_split_up'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'deduction'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'deduction', array('class'=>'input')); ?>
		<?php echo $form->error($model,'deduction'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'deduction_mode'); ?>
            </div>
            <div class="form_field w_280">
                <?php echo $form->dropDownList($model,'deduction_mode',array('P'=>'Percentage','A'=>'Amount'), array('class'=>'select')); ?>
		<?php //echo $form->textField($model,'deduction_mode',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'deduction_mode'); ?>
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