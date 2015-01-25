<?php
/* @var $this IncomeController */
/* @var $model Income */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'income-form',
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
		<?php echo $form->labelEx($model,'income_title'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'income_title',array('class'=>'input','maxlength'=>60)); ?>
		<?php echo $form->error($model,'income_title'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'description'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'description',array('class'=>'input','maxlength'=>100)); ?>
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
		<?php echo $form->labelEx($model,'income_date'); ?>
            </div>
            <div class="form_field w_280">
                <?php if($model->income_date == '0000-00-00'){ $model->income_date = '';} ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                        'model'=>$model,
                        'attribute'=>'income_date',
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
		<?php //echo $form->textField($model,'income_date'); ?>
		<?php echo $form->error($model,'income_date'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'finance_category_id'); ?>
            </div>
            <div class="form_field w_280">
                <?php 
                $list = FinanceCategory::model()->findAll(array('condition'=>'status=:st AND is_income=:in', 'params'=>array(':st'=>'A', ':in'=>1)));

                $categories = CHtml::listData($list, 
                           'id', 'category_name');
                ?>
		
		<?php echo $form->dropDownList($model,'finance_category_id',$categories, array('empty' => 'Select Category', 'class'=>'select')); ?>
		<?php //echo $form->textField($model,'finance_category_id'); ?>
		<?php echo $form->error($model,'finance_category_id'); ?>
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