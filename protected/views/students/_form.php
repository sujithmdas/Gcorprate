<?php
/* @var $this StudentsController */
/* @var $model Students */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'students-form',
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
		<?php echo $form->labelEx($model,'admission_number'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'admission_number',array('class'=>'input','maxlength'=>45)); ?>
		<?php echo $form->error($model,'admission_number'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'admission_date'); ?>
            </div>
            <div class="form_field w_280">
                <?php if($model->admission_date == '0000-00-00'){ $model->admission_date = '';} ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                        'model'=>$model,
                        'attribute'=>'admission_date',
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
		<?php //echo $form->textField($model,'admission_date'); ?>
		<?php echo $form->error($model,'admission_date'); ?>
            </div>
	</div>

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
		<?php echo $form->labelEx($model,'email'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'email',array('class'=>'input','maxlength'=>45)); ?>
		<?php echo $form->error($model,'email'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'category_id'); ?>
            </div>
            <div class="form_field w_280">
                <?php
                 $list = StudentCategory::model()->findAll(array('condition'=>'status=:st', 'params'=>array(':st'=>'A')));

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
		<?php echo $form->labelEx($model,'gender'); ?>
            </div>
            <div id="gender" class="form_field w_280">
                <?php echo $form->radioButtonList($model, 'gender', array('1'=>'Male', '0'=>'Female'),array('separator'=>'')); ?>
		<?php //echo $form->textField($model,'gender',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'gender'); ?>
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
		<?php //echo $form->textField($model,'date_of_birth'); ?>
		<?php echo $form->error($model,'date_of_birth'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'pincode'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'pincode', array('class'=>'input')); ?>
		<?php echo $form->error($model,'pincode'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'parent_name'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'parent_name',array('class'=>'input','maxlength'=>45)); ?>
		<?php echo $form->error($model,'parent_name'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'parent_phone'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'parent_phone',array('class'=>'input','maxlength'=>14)); ?>
		<?php echo $form->error($model,'parent_phone'); ?>
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
		<?php echo $form->labelEx($model,'mobile'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'mobile',array('class'=>'input','maxlength'=>14)); ?>
		<?php echo $form->error($model,'mobile'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'course_id'); ?>
            </div>
            <div class="form_field w_280">
                <?php
                 $list = Courses::model()->findAll(array('condition'=>'status=:st', 'params'=>array(':st'=>'A')));

                $courses = CHtml::listData($list, 
                           'id', 'course_name');
                ?>
		
		<?php echo $form->dropDownList($model,'course_id',$courses, array('empty' => 'Select Course', 'class'=>'select')); ?>
		<?php //echo $form->textField($model,'course_id'); ?>
		<?php echo $form->error($model,'course_id'); ?>
            </div>
	</div>

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
		<?php //echo $form->textField($model,'batch_id'); ?>
		<?php echo $form->error($model,'batch_id'); ?>
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