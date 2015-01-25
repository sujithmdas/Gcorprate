<?php

/**
 * This is the model class for table "employee_attendance".
 *
 * The followings are the available columns in table 'employee_attendance':
 * @property integer $id
 * @property integer $employee_id
 * @property string $reason
 * @property integer $leave_type_id
 * @property integer $leave_split_up_id
 * @property string $leave_date
 *
 * The followings are the available model relations:
 * @property Employees $employee
 * @property LeaveSplitUp $leaveSplitUp
 * @property LeaveType $leaveType
 */
class EmployeeAttendance extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employee_attendance';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employee_id, reason, leave_type_id, leave_split_up_id', 'required'),
			array('employee_id, leave_type_id, leave_split_up_id', 'numerical', 'integerOnly'=>true),
			array('leave_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, employee_id, reason, leave_type_id, leave_split_up_id, leave_date', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'employee' => array(self::BELONGS_TO, 'Employees', 'employee_id'),
			'leaveSplitUp' => array(self::BELONGS_TO, 'LeaveSplitUp', 'leave_split_up_id'),
			'leaveType' => array(self::BELONGS_TO, 'LeaveType', 'leave_type_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'employee_id' => 'Employee',
			'reason' => 'Reason',
			'leave_type_id' => 'Leave Type',
			'leave_split_up_id' => 'Leave Split Up',
			'leave_date' => 'Leave Date',
                        'department' => 'Department',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
                
                $criteria->compare('id',$this->id);
		$criteria->compare('employee_id',$this->employee_id);
		$criteria->compare('reason',$this->reason,true);
		$criteria->compare('leave_type_id',$this->leave_type_id);
		$criteria->compare('leave_split_up_id',$this->leave_split_up_id);
		$criteria->compare('leave_date',$this->leave_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'sort'=>array( 'defaultOrder'=>'id DESC', ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EmployeeAttendance the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        protected function beforeSave()
        {
        $this->leave_date= ('' == $this->leave_date)? '0000-00-00' : date("Y-m-d", strtotime($this->leave_date));
        
        return TRUE;
        }

        public function afterFind()
        {
        $this->leave_date = ('0000-00-00' == $this->leave_date)? '' :date("d-m-Y",strtotime($this->leave_date));
        
        return true;
        }
}
