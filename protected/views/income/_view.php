<?php
/* @var $this IncomeController */
/* @var $data Income */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('income_title')); ?>:</b>
	<?php echo CHtml::encode($data->income_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('income_date')); ?>:</b>
	<?php echo CHtml::encode($data->income_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('finance_category_id')); ?>:</b>
	<?php echo CHtml::encode($data->finance_category_id); ?>
	<br />


</div>