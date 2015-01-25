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
              <?php echo CHtml::link('<img src="images/acad.png" width="48" height="48"  />
                <p class="texticonhome">Students</p>',array('students/create'), $htmlOptions=array ('class'=>'linknone')); ?>
              
          </div>
          <div class="home_grid w_150">
              <?php echo CHtml::link('<img src="images/acad.png" width="48" height="48"  />
                <p class="texticonhome">View Students</p>',array('students/admin'), $htmlOptions=array ('class'=>'linknone')); ?>
          </div>
      </div>
      
      <div class="row2">
          <div class="home_grid w_150">
              <?php echo CHtml::link('<img src="images/acad.png" width="48" height="48"  />
                <p class="texticonhome">Attendance</p>','#', $htmlOptions=array ('class'=>'linknone')); ?>
              
          </div>
          <div class="home_grid w_150">
              <?php echo CHtml::link('<img src="images/acad.png" width="48" height="48"  />
                <p class="texticonhome">Exam Schedule</p>','#', $htmlOptions=array ('class'=>'linknone')); ?>
              
          </div>
      </div>
      
      <div class="row2">
          <div class="home_grid w_150">
              <?php echo CHtml::link('<img src="images/acad.png" width="48" height="48"  />
                <p class="texticonhome">Time Table</p>','#', $htmlOptions=array ('class'=>'linknone')); ?>
              
          </div>
          <div class="home_grid w_150">
              <?php echo CHtml::link('<img src="images/acad.png" width="48" height="48"  />
                <p class="texticonhome">Calander</p>','#', $htmlOptions=array ('class'=>'linknone')); ?>
              
          </div>
      </div>
      
 </div>
</div>


  