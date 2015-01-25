<?php
/* @var $this FeesPaymentController */
/* @var $model FeesPayment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fees-payment-form',
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

    <div class="border">
	<div class="row5">
            <div class="form_label  w_150">
                <?php echo $form->labelEx($model,'batch_id'); ?>
            </div>
            <div class="form_field w_280">
		<?php
                 $list = Batches::model()->findAll(array('condition'=>'status=:st', 'params'=>array(':st'=>'A')));

                $batches = CHtml::listData($list, 
                           'id', 'batch_name');
                ?>
		
		<?php echo $form->dropDownList($model,'batch_id',$batches, array('empty' => 'Select Batch', 'class'=>'select',
                //'prompt'=>'Select Region',
                'ajax' => array(
                'type'=>'POST', 
                'url'=>Yii::app()->createUrl('batches/loadstudents'), //or $this->createUrl('loadcities') if '$this' extends CController
                'update'=>'#student_id', //or 'success' => 'function(data){...handle the data in the way you want...}',
                'data'=>array('batch_id'=>'js:this.value'),
                ))); ?>
		<?php echo $form->error($model,'batch_id'); ?>
            </div>
            <div class="form_label  w_150">
                <?php echo $form->labelEx($model,'fees_collection_id'); ?>
            </div>
            <div class="form_field w_280">
		<?php
                 $list = FeesCollection::model()->findAll(array('condition'=>'status=:st', 'params'=>array(':st'=>'A')));

                    $feesCollections = CHtml::listData($list, 'id', 'fees_collection_name');
                ?>
		
		<?php echo $form->dropDownList($model,'fees_collection_id',$feesCollections, array('empty' => 'Select Fees Collection', 'class'=>'select',
                'ajax' => array(
                'type'=>'POST', 
                'url'=>Yii::app()->createUrl('feesCollection/loadcategory'), //or $this->createUrl('loadcities') if '$this' extends CController
                'success' => 'function(data){$("#fees_category").val(data);}',
                'data'=>array('fees_collection_id'=>'js:this.value'),
                ))); ?>
		<?php echo $form->error($model,'fees_collection_id'); ?>
            </div>
	</div>
    
        <div class="row5">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'student_id'); ?>
            </div>
            <div class="form_field w_280">
		<?php
                 $list = Students::model()->findAll(array('condition'=>'status=:st', 'params'=>array(':st'=>'A')));

                $students = CHtml::listData($list, 'id', 'name');
                ?>
		
		<?php echo $form->dropDownList($model,'student_id',array(), array('empty' => 'Select Student', 'class'=>'select', 'id'=>'student_id',
                    'ajax' => array(
                'type'=>'POST', 
                'url'=>Yii::app()->createUrl('students/loaddetails'), //or $this->createUrl('loadcities') if '$this' extends CController
                'success' => 'function(data){var splitdata = data.split("||");$("#student_category").val(splitdata[0]);$("#admission_number").val(splitdata[1])}',
              'data'=>array('student_id'=>'js:this.value'),
              ))); ?>
		<?php echo $form->error($model,'student_id'); ?>
            </div>
            <div class="form_label  w_150">
                <?php echo $form->labelEx($model,'fees_payment_date'); ?>
            </div>
            <div class="form_field w_280">
                <?php if($model->fees_payment_date == '0000-00-00'){ $model->fees_payment_date = '';} ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                        'model'=>$model,
                        'attribute'=>'fees_payment_date',
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
                <?php //echo $form->textField($model,'fees_payment_date', array('class'=>'input')); ?>
		<?php echo $form->error($model,'fees_payment_date'); ?>
            </div>
	</div>
    </div>
    
        <div class="row5">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'fees_receipt_number'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'fees_receipt_number',array('class'=>'input','maxlength'=>20)); ?>
		<?php echo $form->error($model,'fees_receipt_number'); ?>
            </div>
            <div class="form_label  w_150">
		<label for="fees_category">Fees Category</label>
            </div>
            <div class="form_field w_280">
		<input type="text" name="fees_category" id="fees_category" class="input" />
            </div>
        </div>
    
        <div class="row5">
            <div class="form_label  w_150">
                <label for="student_category">Student Category</label>
            </div>
            <div class="form_field w_280">
		<input type="text" name="student_category" id="student_category" class="input" />
            </div>
            <div class="form_label  w_150">
		<label for="admission_number">Admission Number</label>
            </div>
            <div class="form_field w_280">
		<input type="text" name="admission_number" id="admission_number" class="input" />
            </div>
        </div>
    
    <div class="border">
        <div class="row5">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'payment_mode'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->dropDownList($model,'payment_mode',array('Cash'=>'Cash','Cheque'=>'Cheque', 'DD'=>'DD'), array('empty' => '', 'class'=>'select')); ?>
		<?php echo $form->error($model,'payment_mode'); ?>
            </div>
            <div class="form_label  w_150">
                <?php echo $form->labelEx($model,'payment_remark'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textArea($model,'payment_remark',array('class'=>'textarea','rows'=>3, 'cols'=>24)); ?>
		<?php echo $form->error($model,'payment_remark'); ?>
            </div>
	</div>
    
        <div class="row5">
            <div class="form_label  w_150">
		<?php echo $form->labelEx($model,'paid_amount'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'paid_amount', array('class'=>'input')); ?>
		<?php echo $form->error($model,'paid_amount'); ?>
            </div>
            <div class="form_label  w_150">
                &nbsp;
            </div>
            <div class="form_field w_280">
                &nbsp;
            </div>
	</div>

    </div>
    <div class="row2">
            <div class="form_label  w_150">
            </div>
            <div class="form_field w_280">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Pay' : 'Save', array('class'=>'save')); ?>
            </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->