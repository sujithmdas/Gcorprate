<?php
/* @var $this EmployeeAttendanceController */
/* @var $model EmployeeAttendance */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-attendance-form',
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
		<?php echo $form->labelEx($model,'employee_id'); ?>
            </div>
            <div class="form_field w_280">
		<?php //echo $form->textField($model,'employee_id'); ?>
                <?php
                 $list = Employees::model()->findAll(array('condition'=>'type=:st', 'params'=>array(':st'=>'A')));

                $employees = CHtml::listData($list, 
                           'id', 'name');
                ?>
		
		<?php echo $form->dropDownList($model,'employee_id',$employees, array('empty' => 'Select Employee', 'class'=>'select')); ?>
		<?php echo $form->error($model,'employee_id'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'reason'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textArea($model,'reason',array('class'=>'input','rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'reason'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'leave_type_id'); ?>
            </div>
            <div class="form_field w_280">
		<?php //echo $form->textField($model,'leave_type_id'); ?>
                <?php
                 $list = LeaveType::model()->findAll(array('condition'=>'status=:st', 'params'=>array(':st'=>'A')));

                $leaveTypes = CHtml::listData($list, 
                           'id', 'leave_name');
                ?>
		
		<?php echo $form->dropDownList($model,'leave_type_id',$leaveTypes, array('empty' => 'Select Leave Type', 'class'=>'select')); ?>
		<?php echo $form->error($model,'leave_type_id'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'leave_split_up_id'); ?>
            </div>
            <div class="form_field w_280">
		<?php //echo $form->textField($model,'leave_split_up_id'); ?>
                <?php
                 $list = LeaveSplitUp::model()->findAll(array('condition'=>'status=:st', 'params'=>array(':st'=>'A')));

                $leaveSplitUps = CHtml::listData($list, 
                           'id', 'leave_split_up');
                ?>
		
		<?php echo $form->dropDownList($model,'leave_split_up_id',$leaveSplitUps, array('empty' => 'Select Leave Type', 'class'=>'select')); ?>
		<?php echo $form->error($model,'leave_split_up_id'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'leave_date'); ?>
            </div>
            <div class="form_field w_280">
		<?php //echo $form->textField($model,'leave_date'); ?>
                <?php if($model->leave_date == '0000-00-00'){ $model->leave_date = '';} ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                        'model'=>$model,
                        'attribute'=>'leave_date',
                        // additional javascript options for the date picker plugin
                        'options'=>array(
                            'dateFormat' => 'dd-mm-yy',
                            'maxDate' => date("d-m-Y"),
                            'showAnim'=>'fold',
                        ),
                        'htmlOptions'=>array(
                            'readonly' => 'readonly',
                            'class'=>'input',
                        ),
                    ));
                ?>
		<?php echo $form->error($model,'leave_date'); ?>
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
