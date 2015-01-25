<?php
/* @var $this EmployeeSubjectAllotmentController */
/* @var $model EmployeeSubjectAllotment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-subject-allotment-form',
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
		<?php echo $form->labelEx($model,'batch_id'); ?>
            </div>
            <div class="form_field w_280">
		<?php
                 $list = Batches::model()->findAll(array('condition'=>'status=:st', 'params'=>array(':st'=>'A')));

                $batches = CHtml::listData($list, 
                           'id', 'batch_name');
                ?>
		
		<?php echo $form->dropDownList($model,'batch_id',$batches, array('empty' => 'Select Batch', 'class'=>'select')); ?>
		<?php echo $form->error($model,'batch_id'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'subject_id'); ?>
            </div>
            <div class="form_field w_280">
		<?php
                 $list = Subjects::model()->findAll(array('condition'=>'status=:st', 'params'=>array(':st'=>'A')));

                $subjects = CHtml::listData($list, 
                           'id', 'subject_name');
                ?>
		
		<?php echo $form->dropDownList($model,'subject_id',$subjects, array('empty' => 'Select Subject', 'class'=>'select')); ?>
		<?php echo $form->error($model,'subject_id'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'employee_id'); ?>
            </div>
            <div class="form_field w_280">
		<?php
                 $list = Employees::model()->findAll(array('condition'=>'status=:st', 'params'=>array(':st'=>'A')));

                $employees = CHtml::listData($list, 
                           'id', 'name');
                ?>
		
		<?php echo $form->dropDownList($model,'employee_id',$employees, array('empty' => 'Select Employee', 'class'=>'select')); ?>
		<?php echo $form->error($model,'employee_id'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
                </div>
            <div class="form_field w_280">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Allot' : 'Save', array('class'=>'save')); ?>
            </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->