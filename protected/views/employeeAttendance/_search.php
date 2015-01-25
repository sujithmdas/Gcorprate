<?php
/* @var $this EmployeeAttendanceController */
/* @var $model EmployeeAttendance */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_id'); ?>
		<?php echo $form->textField($model,'employee_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reason'); ?>
		<?php echo $form->textArea($model,'reason',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'leave_type_id'); ?>
		<?php echo $form->textField($model,'leave_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'leave_split_up_id'); ?>
		<?php echo $form->textField($model,'leave_split_up_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'leave_date'); ?>
		<?php echo $form->textField($model,'leave_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->