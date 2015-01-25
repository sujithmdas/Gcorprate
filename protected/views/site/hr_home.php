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
              <?php echo CHtml::link('<img src="images/hricon.png" width="40" height="40"  />
                <p class="texticonhome">Add Employee </p>',array('employees/create'), $htmlOptions=array ('class'=>'linknone')); ?>
              
          </div>
          <div class="home_grid w_150">
              <?php echo CHtml::link('<img src="images/hricon.png" width="40" height="40"  />
                <p class="texticonhome">Emp Category</p>',array('employeeCategory/admin'), $htmlOptions=array ('class'=>'linknone')); ?>
          </div>
      </div>
      
      <div class="row2">
          <div class="home_grid w_150">
              <?php echo CHtml::link('<img src="images/hricon.png" width="40" height="40"  />
                <p class="texticonhome">Emp Department</p>',array('employeeDepartment/admin'), $htmlOptions=array ('class'=>'linknone')); ?>
              
          </div>
          <div class="home_grid w_150">
              <?php echo CHtml::link('<img src="images/hricon.png" width="40" height="40"  />
                <p class="texticonhome">Payroll Category</p>',array('payrollCategory/admin'), $htmlOptions=array ('class'=>'linknone')); ?>
              
          </div>
      </div>
      
      <div class="row2">
          <div class="home_grid w_150">
              <?php echo CHtml::link('<img src="images/hricon.png" width="40" height="40"  />
                <p class="texticonhome">E Payslip</p>',array('paySlip/admin'), $htmlOptions=array ('class'=>'linknone')); ?>
              
          </div>
          <div class="home_grid w_150">
              <?php echo CHtml::link('<img src="images/hricon.png" width="40" height="40"  />
                <p class="texticonhome">Attendance register</p>',array('employeeAttendance/admin'), $htmlOptions=array ('class'=>'linknone')); ?>
              
          </div>
      </div>
      
      
 </div>
</div>


  