<?php
    /* @var $this UsersController */
    /* @var $model Users */
    /* @var $form CActiveForm */
    
    /**
     * Hard coded values for parent and student(5, 4) 
     */

    Yii::app()->clientScript->registerScript('search', "
$('#Users_user_type_id').change(function(){
	 if($(this).val() == 4 || $(this).val() == 5){
                 $('#studentChooser').show();
                 }else{
                 $('#studentChooser').hide();
                 }
});
");
?>

<div class="form">

    <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'users-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation' => false,
        ));
    ?>


    <?php echo $form->errorSummary($model); ?>

    <div class="row2">
        <div class="form_label  w_150">
            <?php echo $form->labelEx($model, 'name'); ?>
        </div>
        <?php
            if (isset($_GET['student_name']) && !empty($_GET['student_name']))
                $model->name = $_GET['student_name'];
        ?>
        <div class="form_field w_280">
            <?php echo $form->textField($model, 'name', array('class' => 'input', 'maxlength' => 60)); ?>
            <?php echo $form->error($model, 'name'); ?>
        </div>
    </div>

    <div class="row2">
        <div class="form_label  w_150">
            <?php echo $form->labelEx($model, 'username'); ?>
        </div>
        <div class="form_field w_280">
            <?php echo $form->textField($model, 'username', array('class' => 'input', 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'username'); ?>
        </div>
    </div>

    <div class="row2">
        <div class="form_label  w_150">
            <?php echo $form->labelEx($model, 'password'); ?>
        </div>
        <div class="form_field w_280">
            <?php echo $form->passwordField($model, 'password', array('class' => 'input', 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'password'); ?>
        </div>
    </div>
    <?php
        $display = null;
        if (isset($_GET['student_id']) && !empty($_GET['student_id']))
            $display = 'display: none;';
    ?>
    <div class="row2" style="<?= $display ?>">
        <div class="form_label  w_150">    
            <?php
                $list = UserTypes::model()->findAll(array('condition' => 'status=:st', 'params' => array(':st' => 'A')));

                $designations = CHtml::listData($list, 'id', 'designation');
            ?>
            <?php echo $form->labelEx($model, 'user_type_id'); ?>
        </div>

        <div class="form_field w_280" >
            <?php
                echo $form->dropDownList($model, 'user_type_id', $designations, array(
                    'empty' => 'Select User Type',
                    'class' => 'select',
                ));
            ?>
<?php echo $form->error($model, 'user_type_id'); ?>
        </div>
    </div>

    <div id="studentChooser" style="display: none">
        <div class="row2" style="<?= $display ?>">
            <div class="form_label  w_150">
                <?php echo CHtml::label('Course', 'course_id'); ?>
            </div>
            <div class="form_field w_280">
                <?php
                    $list = Courses::model()->findAll(array('condition' => 'status=:st', 'params' => array(':st' => 'A')));

                    $courses = CHtml::listData($list, 'id', 'course_name');
                ?>

                <?php
                    echo CHtml::dropDownList('course_id', '', $courses, array(
                        'class' => 'select',
                        'prompt' => 'Select Course',
                        'ajax' => array(
                            'type' => 'POST',
                            'url' => Yii::app()->createUrl('batches/loadBatches'),
                            'update' => '#batch_id', //or 'success' => 'function(data){...handle the data in the way you want...}',
                            'data' => array('course_id' => 'js:$(this).val()'),
                    )));
                ?>
<?php // echo $form->error($model,'course_id');   ?>
            </div>
        </div>

        <div class="row2" style="<?= $display ?>">
            <div class="form_label  w_150">
                <?php echo CHtml::label('Batch', 'batch_id'); ?>
            </div>
            <div class="form_field w_280">
                <?php
                    $list = Batches::model()->findAll(array('condition' => 'status=:st', 'params' => array(':st' => 'A')));

                    $batches = CHtml::listData($list, 'id', 'batch_name');
                ?>

                <?php
                    echo CHtml::dropDownList('batch_id', '', array(), array(
                        'class' => 'select',
                        'prompt' => 'Select Batch',
                        'ajax' => array(
                            'type' => 'POST',
                            'url' => Yii::app()->createUrl('batches/loadStudents'),
                            'update' => '#Users_student_id', //or 'success' => 'function(data){...handle the data in the way you want...}',
                            'data' => array('batch_id' => 'js:$(this).val()'),
                    )));
                ?>
<?php // echo $form->error($model,'batch_id');    ?>
            </div>
        </div>

        <div class="row2" style="<?= $display ?>">
            <div class="form_label  w_150">    
<?php echo $form->labelEx($model, 'student_id'); ?>
            </div>

            <div class="form_field w_280" >
<?php echo $form->dropDownList($model, 'student_id', array(), array('empty' => 'Select Student', 'class' => 'select')); ?>
<?php echo $form->error($model, 'student_id'); ?>
            </div>
        </div>
    </div>

    <div class="row2">
        <div class="form_label  w_150">
        </div>
        <div class="form_field w_280">
<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'save')); ?>
        </div>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->