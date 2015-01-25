<?php

/**
 * This is the model class for table "employee_subject_allotment".
 *
 * The followings are the available columns in table 'employee_subject_allotment':
 * @property integer $id
 * @property integer $batch_id
 * @property integer $subject_id
 * @property integer $employee_id
 *
 * The followings are the available model relations:
 * @property Employees $employee
 * @property Batches $batch
 * @property Subjects $subject
 */
class EmployeeSubjectAllotment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employee_subject_allotment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('batch_id, subject_id, employee_id', 'required'),
			array('batch_id, subject_id, employee_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, batch_id, subject_id, employee_id', 'safe', 'on'=>'search'),
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
			'batch' => array(self::BELONGS_TO, 'Batches', 'batch_id'),
			'subject' => array(self::BELONGS_TO, 'Subjects', 'subject_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'batch_id' => 'Batch',
			'subject_id' => 'Subject',
			'employee_id' => 'Employee',
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
		$criteria->compare('batch_id',$this->batch_id);
		$criteria->compare('subject_id',$this->subject_id);
		$criteria->compare('employee_id',$this->employee_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EmployeeSubjectAllotment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
