<?php

/**
 * This is the model class for table "pay_slip".
 *
 * The followings are the available columns in table 'pay_slip':
 * @property integer $id
 * @property integer $employee_id
 * @property string $salary_date
 * @property double $basic_pay
 * @property double $deductions
 *
 * The followings are the available model relations:
 * @property Employees $employee
 */
class PaySlip extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pay_slip';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employee_id', 'required'),
			array('employee_id', 'numerical', 'integerOnly'=>true),
			array('basic_pay, deductions', 'numerical'),
			array('salary_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, employee_id, salary_date, basic_pay, deductions', 'safe', 'on'=>'search'),
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
			'salary_date' => 'Salary Date',
			'basic_pay' => 'Basic Pay',
			'deductions' => 'Deductions',
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
		$criteria->compare('salary_date',$this->salary_date,true);
		$criteria->compare('basic_pay',$this->basic_pay);
		$criteria->compare('deductions',$this->deductions);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PaySlip the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
         protected function beforeSave()
        {
        $this->salary_date= ('' == $this->salary_date)? '0000-00-00' : date("Y-m-d", strtotime($this->salary_date));
        return TRUE;
        }

        public function afterFind()
        {
        $this->salary_date = ('0000-00-00' == $this->salary_date)? '' :date("d-m-Y",strtotime($this->salary_date));
        return true;
        }
}
