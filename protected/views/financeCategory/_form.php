<?php
/* @var $this FinanceCategoryController */
/* @var $model FinanceCategory */
/* @var $form CActiveForm */
?>

<div class="form">
    
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'finance-category-form',
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
		<?php echo $form->labelEx($model,'description'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'description',array('class'=>'input','maxlength'=>80)); ?>
		<?php echo $form->error($model,'description'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'is_income'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->checkBox($model,'is_income'); ?>
		<?php echo $form->error($model,'is_income'); ?>
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