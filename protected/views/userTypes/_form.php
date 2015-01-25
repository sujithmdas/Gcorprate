<?php
/* @var $this UserTypesController */
/* @var $model UserTypes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-types-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'designation'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'designation',array('class'=>'input','maxlength'=>45)); ?>
		<?php echo $form->error($model,'designation'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'user_type'); ?>
            </div>
            <div class="form_field w_280">
                <?php
                 $types = array('AD'=>'Admin','AH'=>'Academic Head','PP'=>'Principal','FC'=>'Faculty', 'PO'=>'Placement Officer', 'PT'=>'Parent','ST'=>'Student','OT'=>'Others')
                ?>
		<?php echo $form->dropDownList($model,'user_type',$types, array('empty' => 'Select Course', 'class'=>'select')); ?>
		<?php echo $form->error($model,'user_type'); ?>
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