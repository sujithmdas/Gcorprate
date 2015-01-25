<?php
/* @var $this CoursesController */
/* @var $data Courses */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('course_name')); ?>:</b>
	<?php echo CHtml::encode($data->course_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('section_name')); ?>:</b>
	<?php echo CHtml::encode($data->section_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('course_code')); ?>:</b>
	<?php echo CHtml::encode($data->course_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>