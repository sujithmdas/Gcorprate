<?php
/* @var $this CoursesController */
/* @var $model Courses */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'courses-form',
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
		<?php echo $form->labelEx($model,'course_name'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'course_name',array('class'=>'input','maxlength'=>60)); ?>
		<?php echo $form->error($model,'course_name'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'section_name'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'section_name',array('class'=>'input','maxlength'=>60)); ?>
		<?php echo $form->error($model,'section_name'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'course_code'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'course_code',array('class'=>'input','maxlength'=>45)); ?>
		<?php echo $form->error($model,'course_code'); ?>
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