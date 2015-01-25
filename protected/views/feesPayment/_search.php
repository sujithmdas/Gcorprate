<?php
/* @var $this FeesPaymentController */
/* @var $model FeesPayment */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
            <div class="form_label  w_150">
		<?php echo $form->label($model,'fees_receipt_number'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'fees_receipt_number',array('class'=>'input','maxlength'=>20)); ?>
            </div>

            <div class="form_label  w_150">
                <?php echo $form->label($model,'batch_id'); ?>
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
            </div>
	</div>

	<div class="row">
            <div class="form_label  w_150">
		<?php echo $form->label($model,'student_id'); ?>
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
            </div>
            <div class="form_label  w_150">
		<?php echo $form->label($model,'fees_collection_id'); ?>
            </div>
            <div class="form_field w_280">
		<?php echo $form->textField($model,'fees_collection_id'); ?>
            </div>
	</div>

	<div class="row">
            <div class="form_label  w_150">
		<?php echo $form->label($model,'fees_payment_date'); ?>
            </div>
            <div class="form_field w_280">
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
            </div>
            <div class="form_label  w_150">
                &nbsp;
            </div>
            <div class="form_field w_280">
		<?php echo CHtml::submitButton('Search'); ?>
            </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->