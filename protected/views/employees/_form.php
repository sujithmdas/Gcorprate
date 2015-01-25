<?php
/* @var $this EmployeesController */
/* @var $model Employees */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employees-form',
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
		<?php echo $form->labelEx($model,'name'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'name',array('class'=>'input','maxlength'=>45)); ?>
		<?php echo $form->error($model,'name'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'employee_number'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'employee_number',array('class'=>'input','maxlength'=>45)); ?>
		<?php echo $form->error($model,'employee_number'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'joining_date'); ?>
            </div>
            <div class="form_field w_280">
                <?php if($model->joining_date == '0000-00-00'){ $model->joining_date = '';} ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                        'model'=>$model,
                        'attribute'=>'joining_date',
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
		<?php //echo $form->textField($model,'joining_date'); ?>
		<?php echo $form->error($model,'joining_date'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'date_of_birth'); ?>
            </div>
            <div class="form_field w_280">
		<?php if($model->date_of_birth == '0000-00-00'){ $model->date_of_birth = '';} ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                        'model'=>$model,
                        'attribute'=>'date_of_birth',
                        // additional javascript options for the date picker plugin
                        'options'=>array(
                            'changeMonth'=>true,
                            'changeYear'=>true,
                            'dateFormat' => 'dd-mm-yy',
                            'maxDate' => date("d-m-Y", strtotime("-16 year")),
                            'showAnim'=>'fold',
                        ),
                        'htmlOptions'=>array(
                            'readonly' => 'readonly',
                            'class'=>'input',
                        ),
                    ));
                ?>
		<?php echo $form->error($model,'date_of_birth'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'gender'); ?>
            </div>
            <div id="gender" class="form_field w_280">
                <?php echo $form->radioButtonList($model, 'gender', array('M'=>'Male', 'F'=>'Female'),array('separator'=>'')); ?>
		<?php echo $form->error($model,'gender'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'department_id'); ?>
            </div>
            <div class="form_field w_280">
                <?php
                 $list = EmployeeDepartment::model()->findAll(array('condition'=>'status=:st', 'params'=>array(':st'=>'A')));

                $departments = CHtml::listData($list, 
                           'id', 'department_name');
                ?>
		
		<?php echo $form->dropDownList($model,'department_id',$departments, array('empty' => 'Select Department', 'class'=>'select')); ?>
		<?php //echo $form->textField($model,'department_id'); ?>
		<?php echo $form->error($model,'department_id'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'category_id'); ?>
            </div>
            <div class="form_field w_280">
                <?php
                 $list = EmployeeCategory::model()->findAll(array('condition'=>'status=:st', 'params'=>array(':st'=>'A')));

                $categories = CHtml::listData($list, 
                           'id', 'category_name');
                ?>
		
		<?php echo $form->dropDownList($model,'category_id',$categories, array('empty' => 'Select Category', 'class'=>'select')); ?>
		<?php //echo $form->textField($model,'category_id'); ?>
		<?php echo $form->error($model,'category_id'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'job_title'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'job_title',array('class'=>'input','maxlength'=>45)); ?>
		<?php echo $form->error($model,'job_title'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'qualification'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textArea($model,'qualification',array('class'=>'input','rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'qualification'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'experience'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textArea($model,'experience',array('class'=>'input','rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'experience'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'email'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'email',array('class'=>'input','maxlength'=>60)); ?>
		<?php echo $form->error($model,'email'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'address'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textArea($model,'address',array('class'=>'input','rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'pin_code'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'pin_code', array('class'=>'input')); ?>
		<?php echo $form->error($model,'pin_code'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'mobile'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'mobile',array('class'=>'input','maxlength'=>14)); ?>
		<?php echo $form->error($model,'mobile'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'home_number'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'home_number',array('class'=>'input','maxlength'=>14)); ?>
		<?php echo $form->error($model,'home_number'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'pan_number'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'pan_number',array('class'=>'input','maxlength'=>15)); ?>
		<?php echo $form->error($model,'pan_number'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'salary_account_no'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'salary_account_no',array('class'=>'input','maxlength'=>15)); ?>
		<?php echo $form->error($model,'salary_account_no'); ?>
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