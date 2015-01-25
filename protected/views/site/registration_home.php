<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>


<div class="container">
<div class="sidebar">
  </div>
  
  <div class="sidebar2">
      
      <div class="row2">
          <div class="home_grid w_150">
              <?php echo CHtml::link('<img src="images/acad.png" width="40" height="40"  />
                <p class="texticonhome">Student Admission</p>',array('students/create_reg'), $htmlOptions=array ('class'=>'linknone')); ?>
              
          </div>
          <div class="home_grid w_150">
              <?php echo CHtml::link('<img src="images/acad.png" width="40" height="40"  />
                <p class="texticonhome">Students List</p>',array('students/admin_reg'), $htmlOptions=array ('class'=>'linknone')); ?>
          </div>
      </div>
      
      <div class="row2">
          <div class="home_grid w_150">
              <?php echo CHtml::link('<img src="images/icon-finance.png" width="40" height="40"  />
                <p class="texticonhome">Pay Fees</p>',array('feesPayment/create_reg'), $htmlOptions=array ('class'=>'linknone')); ?>
              
          </div>
          <div class="home_grid w_150">
              <?php echo CHtml::link('<img src="images/icon-finance.png" width="40" height="40"  />
                <p class="texticonhome">Fees Payment List</p>',array('feesPayment/admin_reg'), $htmlOptions=array ('class'=>'linknone')); ?>
              
          </div>
      </div>
      
      
 </div>
</div>


  