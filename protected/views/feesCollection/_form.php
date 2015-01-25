<?php
/* @var $this FeesCollectionController */
/* @var $model FeesCollection */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fees-collection-form',
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
		<?php echo $form->labelEx($model,'fees_collection_name'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'fees_collection_name',array('class'=>'input','maxlength'=>45)); ?>
		<?php echo $form->error($model,'fees_collection_name'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'fees_category_id'); ?>
            </div>
            <div class="form_field w_280">
                <?php
                 $list = FeesCategory::model()->findAll(array('condition'=>'status=:st', 'params'=>array(':st'=>'A')));

                $categories = CHtml::listData($list, 
                           'id', 'fees_category_name');
                ?>
		
		<?php echo $form->dropDownList($model,'fees_category_id',$categories, array('empty' => 'Select Category', 'class'=>'select')); ?>
		<?php //echo $form->textField($model,'fees_category_id'); ?>
		<?php echo $form->error($model,'fees_category_id'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'fine_id'); ?>
            </div>
            <div class="form_field w_280">
                <?php
                 $list = Fine::model()->findAll(array('condition'=>'status=:st', 'params'=>array(':st'=>'A')));

                $fines = CHtml::listData($list, 
                           'id', 'fine_name');
                ?>
		
		<?php echo $form->dropDownList($model,'fine_id',$fines, array('empty' => 'Select Fine', 'class'=>'select')); ?>
		<?php //echo $form->textField($model,'fine_id'); ?>
		<?php echo $form->error($model,'fine_id'); ?>
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
//                            'changeMonth'=>true,
//                            'changeYear'=>true,
                            'dateFormat' => 'dd-mm-yy',
                            'minDate' => date("d-m-Y"),
                            'showAnim'=>'fold',
                        ),
                        'htmlOptions'=>array(
                            'readonly' => 'readonly',
                            'class'=>'input',
                        ),
                    ));
                ?>
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
//                            'changeMonth'=>true,
//                            'changeYear'=>true,
                            'dateFormat' => 'dd-mm-yy',
                            'minDate' => date("d-m-Y"),
                            'showAnim'=>'fold',
                        ),
                        'htmlOptions'=>array(
                            'readonly' => 'readonly',
                            'class'=>'input',
                        ),
                    ));
                ?>
		<?php echo $form->error($model,'end_date'); ?>
            </div>
	</div>

	<div class="row2">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'due_date'); ?>
            </div>
            <div class="form_field w_280">
		<?php if($model->due_date == '0000-00-00'){ $model->due_date = '';} ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                        'model'=>$model,
                        'attribute'=>'due_date',
                        // additional javascript options for the date picker plugin
                        'options'=>array(
//                            'changeMonth'=>true,
//                            'changeYear'=>true,
                            'dateFormat' => 'dd-mm-yy',
                            'minDate' => date("d-m-Y"),
                            'showAnim'=>'fold',
                        ),
                        'htmlOptions'=>array(
                            'readonly' => 'readonly',
                            'class'=>'input',
                        ),
                    ));
                ?>
		<?php echo $form->error($model,'due_date'); ?>
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