<?php
/* @var $this FeesDiscountController */
/* @var $data FeesDiscount */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discount_name')); ?>:</b>
	<?php echo CHtml::encode($data->discount_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discount_amount')); ?>:</b>
	<?php echo CHtml::encode($data->discount_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>