<?php

/**
 * This is the model class for table "employees".
 *
 * The followings are the available columns in table 'employees':
 * @property integer $id
 * @property string $name
 * @property string $employee_number
 * @property string $joining_date
 * @property string $date_of_birth
 * @property string $gender
 * @property integer $department_id
 * @property integer $category_id
 * @property string $job_title
 * @property string $qualification
 * @property string $experience
 * @property string $email
 * @property string $address
 * @property integer $pin_code
 * @property string $mobile
 * @property string $home_number
 * @property string $pan_number
 * @property string $salary_account_no
 *
 * The followings are the available model relations:
 * @property EmployeeCategory $category
 */
class Employees extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employees';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, employee_number, department_id, address, mobile', 'required'),
			array('department_id, category_id, pin_code', 'numerical', 'integerOnly'=>true),
			array('name, employee_number, job_title', 'length', 'max'=>45),
			array('gender', 'length', 'max'=>1),
			array('qualification', 'length', 'max'=>80),
			array('email', 'length', 'max'=>60),
			array('mobile, home_number', 'length', 'max'=>14),
			array('pan_number, salary_account_no', 'length', 'max'=>15),
			array('joining_date, date_of_birth, experience', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, employee_number, joining_date, date_of_birth, gender, department_id, category_id, job_title, qualification, experience, email, address, pin_code, mobile, home_number, pan_number, salary_account_no', 'safe', 'on'=>'search'),
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
			'category' => array(self::BELONGS_TO, 'EmployeeCategory', 'category_id'),
                        'department' => array(self::BELONGS_TO, 'EmployeeDepartment', 'department_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'employee_number' => 'Employee Number',
			'joining_date' => 'Joining Date',
			'date_of_birth' => 'Date Of Birth',
			'gender' => 'Gender',
			'department_id' => 'Department',
			'category_id' => 'Category',
			'job_title' => 'Job Title',
			'qualification' => 'Qualification',
			'experience' => 'Experience',
			'email' => 'Email',
			'address' => 'Address',
			'pin_code' => 'Pin Code',
			'mobile' => 'Mobile',
			'home_number' => 'Home Number',
			'pan_number' => 'Pan Number',
			'salary_account_no' => 'Salary Account No',
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
                
                $criteria->addCondition('t.status = :st');
                $criteria->params = array(':st' => 'A');

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('employee_number',$this->employee_number,true);
		$criteria->compare('joining_date',$this->joining_date,true);
		$criteria->compare('date_of_birth',$this->date_of_birth,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('department_id',$this->department_id);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('job_title',$this->job_title,true);
		$criteria->compare('qualification',$this->qualification,true);
		$criteria->compare('experience',$this->experience,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('pin_code',$this->pin_code);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('home_number',$this->home_number,true);
		$criteria->compare('pan_number',$this->pan_number,true);
		$criteria->compare('salary_account_no',$this->salary_account_no,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Employees the static model class
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
        
        protected function beforeSave()
        {
        $this->joining_date= ('' == $this->joining_date)? '0000-00-00' : date("Y-m-d", strtotime($this->joining_date));
        $this->date_of_birth= ('' == $this->date_of_birth)? '0000-00-00' : date("Y-m-d", strtotime($this->date_of_birth));
        return TRUE;
        }

        public function afterFind()
        {
        $this->joining_date = ('0000-00-00' == $this->joining_date)? '' :date("d-m-Y",strtotime($this->joining_date));
        $this->date_of_birth = ('0000-00-00' == $this->date_of_birth)? '' :date("d-m-Y",strtotime($this->date_of_birth));
        return true;
        }
}
