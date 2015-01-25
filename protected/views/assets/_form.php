<?php
/* @var $this AssetsController */
/* @var $model Assets */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'assets-form',
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
		<?php echo $form->labelEx($model,'asset_name'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'asset_name',array('class'=>'input', 'size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'asset_name'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'description'); ?>
                </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'description',array('class'=>'input', 'size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'description'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'amount'); ?>
                </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'amount', array('class'=>'input')); ?>
		<?php echo $form->error($model,'amount'); ?>
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