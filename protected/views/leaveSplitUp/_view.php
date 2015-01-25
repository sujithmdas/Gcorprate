<?php
/* @var $this LeaveSplitUpController */
/* @var $data LeaveSplitUp */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('leave_split_up')); ?>:</b>
	<?php echo CHtml::encode($data->leave_split_up); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deduction')); ?>:</b>
	<?php echo CHtml::encode($data->deduction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deduction_mode')); ?>:</b>
	<?php echo CHtml::encode($data->deduction_mode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>