<?php
/* @var $this FineController */
/* @var $model Fine */
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
		<?php echo $form->label($model,'fine_name'); ?>
		<?php echo $form->textField($model,'fine_name',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'days_after_due_date'); ?>
		<?php echo $form->textField($model,'days_after_due_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fine_amount'); ?>
		<?php echo $form->textField($model,'fine_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mode'); ?>
		<?php echo $form->textField($model,'mode',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->