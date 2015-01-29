<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<!--WRAPPER-->
<div id="wrapperindex">

	

<!--LOGIN FORM-->
<form name="login-form" class="login-form" action="" method="post">

	<!--HEADER-->
    <div class="headerindex">
    
    <img src="images/iamt.png" class="logoindex"/>
    <hr />
    </div>
    <!--END HEADER-->
	
	<!--CONTENT-->
    <div class="contentindex">
    <p class="textiamt"> IAMT</p>
    <p class="textG">G</p><br />
	<p class="text"> Corporate</p>
    
   
</div>
   
    <!--END CONTENT-->
    
    <!--FOOTER--><!--END FOOTER-->

</form>
<!--END LOGIN FORM-->

</div>

<!--END WRAPPER--><!--indexicon-->
<div class="indexicon">
    
    <?php echo CHtml::link('<input type="button" value="Finance"  class="finance"/>',array('site/finance_home'), $htmlOptions=array ('title'=>'Finance', 'class'=>'noneanchor')); ?>
    
    <?php echo CHtml::link('<input type="button" value="HR Management"  class="finance2"/>',array('site/hr_home'), $htmlOptions=array ('title'=>'HR Management', 'class'=>'noneanchor')); ?>
    
    <?php echo CHtml::link('<input type="button" value="Academics"  class="finance3"/>',array('site/academics_home'), $htmlOptions=array ('title'=>'Academics', 'class'=>'noneanchor')); ?>
    
    <?php echo CHtml::link('<input type="button" value="Registration"  class="finance4"/>',array('site/registration_home'), $htmlOptions=array ('title'=>'Registration', 'class'=>'noneanchor')); ?>

</div>

<div class="indexicon2">
    
    <?php echo CHtml::link('<input type="button" value="Marketing"  class="finance5"/>','http://iamtpromotion.in', $htmlOptions=array ('title'=>'Marketing', 'class'=>'noneanchor')); ?>
    
    <?php echo CHtml::link('<input type="button" value="Administration"  class="finance6"/>','#', $htmlOptions=array ('title'=>'Administration', 'class'=>'noneanchor')); ?>
    
    <?php echo CHtml::link('<input type="button" value="Transport"  class="finance7"/>','#', $htmlOptions=array ('title'=>'Transport', 'class'=>'noneanchor')); ?>
    
    <?php echo CHtml::link('<input type="button" value="Settings"  class="finance8"/>',array('site/settings_home'), $htmlOptions=array ('title'=>'Settings', 'class'=>'noneanchor')); ?>


</div>
<div class="footerindex">
    Powered by : <a href="http://www.geeignet.net/" target="_blank"> Geeignet Technologies</a>
    </div>
<!--GRADIENT--><div class="gradientindex"></div><!--END GRADIENT-->