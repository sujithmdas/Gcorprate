<?php
/* @var $this ExpenseController */
/* @var $data Expense */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expense_title')); ?>:</b>
	<?php echo CHtml::encode($data->expense_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expense_date')); ?>:</b>
	<?php echo CHtml::encode($data->expense_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('finance_category_id')); ?>:</b>
	<?php echo CHtml::encode($data->finance_category_id); ?>
	<br />


</div>