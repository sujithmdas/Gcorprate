<?php
/* @var $this FineController */
/* @var $data Fine */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fine_name')); ?>:</b>
	<?php echo CHtml::encode($data->fine_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('days_after_due_date')); ?>:</b>
	<?php echo CHtml::encode($data->days_after_due_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fine_amount')); ?>:</b>
	<?php echo CHtml::encode($data->fine_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mode')); ?>:</b>
	<?php echo CHtml::encode($data->mode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>