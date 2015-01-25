<?php
/* @var $this EmployeeAttendanceController */
/* @var $data EmployeeAttendance */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_id')); ?>:</b>
	<?php echo CHtml::encode($data->employee_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reason')); ?>:</b>
	<?php echo CHtml::encode($data->reason); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('leave_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->leave_type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('leave_split_up_id')); ?>:</b>
	<?php echo CHtml::encode($data->leave_split_up_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('leave_date')); ?>:</b>
	<?php echo CHtml::encode($data->leave_date); ?>
	<br />


</div>