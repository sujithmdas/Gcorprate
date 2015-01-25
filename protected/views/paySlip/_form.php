<?php
/* @var $this PaySlipController */
/* @var $model PaySlip */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pay-slip-form',
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
		<?php echo $form->labelEx($model,'salary_date'); ?>
            </div>
            <div class="form_field w_280">
		<?php //echo $form->textField($model,'salary_date'); ?>
                <?php if($model->salary_date == '0000-00-00'){ $model->salary_date = '';} ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                        'model'=>$model,
                        'attribute'=>'salary_date',
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
		<?php echo $form->error($model,'salary_date'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'basic_pay'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'basic_pay', array('class'=>'input')); ?>
		<?php echo $form->error($model,'basic_pay'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'deductions'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'deductions', array('class'=>'input')); ?>
		<?php echo $form->error($model,'deductions'); ?>
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