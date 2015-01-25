<?php
/* @var $this LeaveTypeController */
/* @var $data LeaveType */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('leave_name')); ?>:</b>
	<?php echo CHtml::encode($data->leave_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('leave_code')); ?>:</b>
	<?php echo CHtml::encode($data->leave_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maximum_count')); ?>:</b>
	<?php echo CHtml::encode($data->maximum_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carry_forward')); ?>:</b>
	<?php echo CHtml::encode($data->carry_forward); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>