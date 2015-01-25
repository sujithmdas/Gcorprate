<?php
/* @var $this BatchesController */
/* @var $model Batches */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'batches-form',
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
		<?php echo $form->labelEx($model,'batch_name'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'batch_name',array('class'=>'input','maxlength'=>60)); ?>
		<?php echo $form->error($model,'batch_name'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'start_date'); ?>
            </div>
            <div class="form_field w_280">
                <?php if($model->start_date == '0000-00-00'){ $model->start_date = '';} ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                        'model'=>$model,
                        'attribute'=>'start_date',
                        // additional javascript options for the date picker plugin
                        'options'=>array(
                            'changeMonth'=>true,
                            'changeYear'=>true,
                            'dateFormat' => 'dd-mm-yy',
                            //'maxDate' => date("d-m-Y"),
                            'showAnim'=>'fold',
                        ),
                        'htmlOptions'=>array(
                            'readonly' => 'readonly',
                            'class'=>'input',
                        ),
                    ));
                ?>
		<?php //echo $form->textField($model,'start_date'); ?>
		<?php echo $form->error($model,'start_date'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'end_date'); ?>
            </div>
            <div class="form_field w_280">
                <?php if($model->end_date == '0000-00-00'){ $model->end_date = '';} ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                        'model'=>$model,
                        'attribute'=>'end_date',
                        // additional javascript options for the date picker plugin
                        'options'=>array(
                            'changeMonth'=>true,
                            'changeYear'=>true,
                            'dateFormat' => 'dd-mm-yy',
                            //'maxDate' => date("d-m-Y"),
                            'showAnim'=>'fold',
                        ),
                        'htmlOptions'=>array(
                            'readonly' => 'readonly',
                            'class'=>'input',
                        ),
                    ));
                ?>
		<?php //echo $form->textField($model,'end_date'); ?>
		<?php echo $form->error($model,'end_date'); ?>
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
		<?php echo $form->error($model,'course_id'); ?>
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