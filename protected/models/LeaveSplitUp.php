<?php

/**
 * This is the model class for table "leave_split_up".
 *
 * The followings are the available columns in table 'leave_split_up':
 * @property integer $id
 * @property string $leave_split_up
 * @property double $deduction
 * @property string $deduction_mode
 * @property string $status
 *
 * The followings are the available model relations:
 * @property EmployeeAttendance[] $employeeAttendances
 */
class LeaveSplitUp extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'leave_split_up';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('leave_split_up, deduction', 'required'),
			array('deduction', 'numerical'),
			array('leave_split_up', 'length', 'max'=>45),
			array('deduction_mode, status', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, leave_split_up, deduction, deduction_mode, status', 'safe', 'on'=>'search'),
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
			'employeeAttendances' => array(self::HAS_MANY, 'EmployeeAttendance', 'leave_split_up_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'leave_split_up' => 'Leave Split Up',
			'deduction' => 'Deduction',
			'deduction_mode' => 'Deduction Mode',
			'status' => 'Status',
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
                
                $criteria->addCondition('t.status = :st');
                $criteria->params = array(':st' => 'A');
                
		$criteria->compare('leave_split_up',$this->leave_split_up,true);
		$criteria->compare('deduction',$this->deduction);
		$criteria->compare('deduction_mode',$this->deduction_mode,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return LeaveSplitUp the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function delete()
        {
            Yii::app()->db->createCommand()
                ->update($this->tableName(), 
                    array(
                        'status'=>'I'),
                        'id=:id',
                        array(':id'=>  $this->id)
                );
        }
}
