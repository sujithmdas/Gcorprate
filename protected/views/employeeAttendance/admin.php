<?php
/* @var $this EmployeeAttendanceController */
/* @var $model EmployeeAttendance */

$this->breadcrumbs=array(
	'Employee Attendance'=>array('index'),
	'Manage Employee Attendance',
);

$this->menu=array(
	array('label'=>'List EmployeeAttendance', 'url'=>array('index')),
	array('label'=>'Create EmployeeAttendance', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#employee-attendance-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="subheader">
                <img src="images/hr.png" width="32" height="32"  /> HR Management 
                <div class="right">
                    <?php echo CHtml::link('<input type="button" class="view_btn" value="Mark Leave" name="view"/>',array('employeeAttendance/create'), $htmlOptions=array ('class'=>'noneanchor')); ?>
                    
                  </div>
                <hr/>
            </div>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

<div id="statusMsg">
<?php if(Yii::app()->user->hasFlash('success')):?>
    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
<?php endif; ?>
 
<?php if(Yii::app()->user->hasFlash('error')):?>
    <div class="flash-error">
        <?php echo Yii::app()->user->getFlash('error'); ?>
    </div>
<?php endif; ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'employee-attendance-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
        'afterAjaxUpdate' => 'reinstallDatePicker',
	'columns'=>array(
		array(
                  'name'=>'employee_id',
                  'value'=>'$data->employee[\'name\']',
                ),
//                array(
//                  'name'=>'employee_department.department_name',
//                  'filter' => CHtml::listData(EmployeeDepartment::model()->findAll(array('condition'=>'status=:st', 'params'=>array(':st'=>'A'))), 'id', 'department_name'),
//                  'value'=>'$data->employee->department[\'department_name\']',
//                ),
		'reason',
		array(
                  'name'=>'leave_type_id',
                    'filter' => CHtml::listData(LeaveType::model()->findAll(array('condition'=>'status=:st', 'params'=>array(':st'=>'A'))), 'id', 'leave_name'),
                  'value'=>'$data->leaveType[\'leave_name\']',
                ),
		array(
                  'name'=>'leave_split_up_id',
                    'filter' => CHtml::listData(LeaveSplitUp::model()->findAll(array('condition'=>'status=:st', 'params'=>array(':st'=>'A'))), 'id', 'leave_split_up'),
                  'value'=>'$data->leaveSplitUp[\'leave_split_up\']',
                    ),
                
                array(
                    'name'=>'leave_date',
                    'filter'=>$this->widget('zii.widgets.jui.CJuiDatePicker',array(
                        'model'=>$model,
                        'attribute'=>'leave_date',
                        // additional javascript options for the date picker plugin
                        'options'=>array(
                            'dateFormat' => 'yy-mm-dd',
                            'maxDate' => date("Y-m-d"),
                            'showAnim'=>'fold',
                        ),
                        'htmlOptions'=>array(
                            'readonly' => 'readonly',
                            'id'=>'leave_date',
                            
                        ),
                    ),TRUE)
                ),
		
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{update}',
		),
	),
)); 

Yii::app()->clientScript->registerScript('re-install-date-picker', "
function reinstallDatePicker(id, data) {
        //use the same parameters that you had set in your widget else the datepicker will be refreshed by default
    $('#leave_date').datepicker(jQuery.extend({showMonthAfterYear:false},jQuery.datepicker.regional['en'],{'dateFormat':'yy-mm-dd'}));
}
");
?>
