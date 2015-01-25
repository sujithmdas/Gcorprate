<?php
  /* @var $this SiteController */

  $this->pageTitle = Yii::app()->name;

  $this->breadcrumbs = array(
      'Settings',
  );
?>


<div class="container">  
    <div class="subheader">
        <img src="images/Academics.png" /> Academics
        <div class="right">
            &nbsp;
        </div>
        <hr/>
    </div>
    <?php if (isset($this->breadcrumbs)): ?>
          <?php
          $this->widget('zii.widgets.CBreadcrumbs', array(
              'links' => $this->breadcrumbs,
          ));
          ?><!-- breadcrumbs -->
  <?php endif ?>

    <div class="manage_menu_container">
        <div class="row2">
            <div class="home_grid w_280">
<?php echo CHtml::link('<input type="button" value="Manage Course"  class="manage_menu_btn"/>', array('students/create'), $htmlOptions = array('class' => 'linknone')); ?>

            </div>
            <div class="home_grid w_280">
<?php echo CHtml::link('<input type="button" value="Manage Batch"  class="manage_menu_btn"/>', array('students/admin'), $htmlOptions = array('class' => 'linknone')); ?>
            </div>
        </div>

        <div class="row2">
            <div class="home_grid w_280">
<?php echo CHtml::link('<input type="button" value="Manage Student Category"  class="manage_menu_btn"/>', array('students/create'), $htmlOptions = array('class' => 'linknone')); ?>

            </div>
            <div class="home_grid w_280">
<?php echo CHtml::link('<input type="button" value="Manage Subjects"  class="manage_menu_btn"/>', array('students/admin'), $htmlOptions = array('class' => 'linknone')); ?>
            </div>
        </div>
    </div>
</div>


