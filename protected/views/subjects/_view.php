<?php
/* @var $this SubjectsController */
/* @var $data Subjects */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject_name')); ?>:</b>
	<?php echo CHtml::encode($data->subject_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject_code')); ?>:</b>
	<?php echo CHtml::encode($data->subject_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>