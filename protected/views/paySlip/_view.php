<?php
/* @var $this PaySlipController */
/* @var $data PaySlip */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_id')); ?>:</b>
	<?php echo CHtml::encode($data->employee_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salary_date')); ?>:</b>
	<?php echo CHtml::encode($data->salary_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('basic_pay')); ?>:</b>
	<?php echo CHtml::encode($data->basic_pay); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deductions')); ?>:</b>
	<?php echo CHtml::encode($data->deductions); ?>
	<br />


</div>