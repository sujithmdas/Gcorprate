<?php
/* @var $this FineController */
/* @var $model Fine */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fine-form',
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
		<?php echo $form->labelEx($model,'fine_name'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'fine_name',array('class'=>'input','maxlength'=>45)); ?>
		<?php echo $form->error($model,'fine_name'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'days_after_due_date'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'days_after_due_date', array('class'=>'input')); ?>
		<?php echo $form->error($model,'days_after_due_date'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'fine_amount'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'fine_amount', array('class'=>'input')); ?>
		<?php echo $form->error($model,'fine_amount'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'mode'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->dropDownList($model,'mode',array('A'=>'Amount','P'=>'Percentage'), array('class'=>'select')); ?>
		<?php echo $form->error($model,'mode'); ?>
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