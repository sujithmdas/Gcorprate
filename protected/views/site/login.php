<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';

Yii::app()->clientScript->registerScript('search', '
$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
');

?>

<div id="wrapper">

	<!--SLIDE-IN ICONS-->
    <div class="user-icon"></div>
    <div class="pass-icon"></div>
    <!--END SLIDE-IN ICONS-->

<!--LOGIN FORM-->
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
        'htmlOptions'=>array(
        'class'=>'login-form',
      )
)); ?>

	<!--HEADER-->
    <div class="header">
    
    <img src="images/iamt.png" />
    </div>
    <!--END HEADER-->
	
	<!--CONTENT-->
    <div class="content">
	<!--USERNAME-->
        <?php echo $form->textField($model,'username', array('value'=>'Username','class'=>'input username', 'onfocus'=>'this.value=""')); ?>
		<?php echo $form->error($model,'username'); ?>
<!--        <input name="username" type="text" class="input username" value="Username" onfocus="this.value=''" />END USERNAME-->
    <!--PASSWORD-->
    <?php echo $form->passwordField($model,'password', array('value'=>'Password','class'=>'input password', 'onfocus'=>'this.value=""')); ?>
		<?php echo $form->error($model,'password'); ?>
<!--    <input name="password" type="password" class="input password" value="Password" onfocus="this.value=''" />END PASSWORD-->
    </div>
    <!--END CONTENT-->
    
    <!--FOOTER-->
    <div class="footer">
    <?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
    <span >Remember Me</span>
    <br />
    <br />
    <!--LOGIN BUTTON-->
    <?php echo CHtml::submitButton('Login', array('class'=>'button')); ?>
<!--    <input type="submit" name="submit" value="Login" class="button" />-->
    <!--END LOGIN BUTTON-->
   
    </div>
    <!--END FOOTER-->

<?php $this->endWidget(); ?>
<!--END LOGIN FORM-->

</div>
<!--END WRAPPER-->

<!--GRADIENT--><div class="gradient"></div><!--END GRADIENT-->



