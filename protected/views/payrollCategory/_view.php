<?php
/* @var $this PayrollCategoryController */
/* @var $data PayrollCategory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_name')); ?>:</b>
	<?php echo CHtml::encode($data->category_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('percentage')); ?>:</b>
	<?php echo CHtml::encode($data->percentage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('percentage_of')); ?>:</b>
	<?php echo CHtml::encode($data->percentage_of); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_deduction')); ?>:</b>
	<?php echo CHtml::encode($data->is_deduction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>