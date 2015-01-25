<?php
/* @var $this FeesCollectionController */
/* @var $data FeesCollection */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fees_collection_name')); ?>:</b>
	<?php echo CHtml::encode($data->fees_collection_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fees_category_id')); ?>:</b>
	<?php echo CHtml::encode($data->fees_category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fine_id')); ?>:</b>
	<?php echo CHtml::encode($data->fine_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_date')); ?>:</b>
	<?php echo CHtml::encode($data->start_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_date')); ?>:</b>
	<?php echo CHtml::encode($data->end_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('due_date')); ?>:</b>
	<?php echo CHtml::encode($data->due_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>

</div>