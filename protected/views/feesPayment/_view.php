<?php
/* @var $this FeesPaymentController */
/* @var $data FeesPayment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fees_receipt_number')); ?>:</b>
	<?php echo CHtml::encode($data->fees_receipt_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('batch_id')); ?>:</b>
	<?php echo CHtml::encode($data->batch_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('student_id')); ?>:</b>
	<?php echo CHtml::encode($data->student_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fees_collection_id')); ?>:</b>
	<?php echo CHtml::encode($data->fees_collection_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fees_payment_date')); ?>:</b>
	<?php echo CHtml::encode($data->fees_payment_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_mode')); ?>:</b>
	<?php echo CHtml::encode($data->payment_mode); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_remark')); ?>:</b>
	<?php echo CHtml::encode($data->payment_remark); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paid_amount')); ?>:</b>
	<?php echo CHtml::encode($data->paid_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>

</div>