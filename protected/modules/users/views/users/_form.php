<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
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
		<?php echo $form->labelEx($model,'name'); ?>
            </div>
            <?php if(isset($_GET['student_name']) && !empty($_GET['student_name']))
                $model->name = $_GET['student_name'];
            ?>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'name',array('class'=>'input','maxlength'=>60)); ?>
		<?php echo $form->error($model,'name'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'username'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'username',array('class'=>'input','maxlength'=>50)); ?>
		<?php echo $form->error($model,'username'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'password'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->passwordField($model,'password',array('class'=>'input','maxlength'=>100)); ?>
		<?php echo $form->error($model,'password'); ?>
            </div>
	</div>
        <?php 
              $display = null;
              echo $_GET['student_id'];
              if(isset($_GET['student_id']) && !empty($_GET['student_id']))
                $display = 'display: none;';
            ?>
	<div class="row2" style="<?=$display?>">
            <div class="form_label  w_150">    
            <?php
                 $list = UserTypes::model()->findAll(array('condition'=>'status=:st', 'params'=>array(':st'=>'A')));

                $designations = CHtml::listData($list, 
                           'id', 'designation');
                ?>
		<?php echo $form->labelEx($model,'user_type_id'); ?>
            </div>
            
            <div class="form_field w_280" >
		<?php echo $form->dropDownList($model,'user_type_id',$designations, array('empty' => 'Select User Type', 'class'=>'select')); ?>
		<?php echo $form->error($model,'user_type_id'); ?>
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