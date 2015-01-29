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
              <?php echo CHtml::link('<img src="images/icon-finance.png" width="48" height="48"  />
                <p class="texticonhome">Collect the Fee</p>','#', $htmlOptions=array ('class'=>'linknone')); ?>
              
          </div>
          <div class="home_grid w_150">
              <a href="feedefault.html" class="linknone"><img src="images/icon-finance.png" width="48" height="48"  />
                <p class="texticonhome">Fee Defaulter</p></a>
          </div>
      </div>
      
 </div>
</div>


  