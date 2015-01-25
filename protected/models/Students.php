<?php

/**
 * This is the model class for table "students".
 *
 * The followings are the available columns in table 'students':
 * @property integer $id
 * @property string $admission_number
 * @property string $admission_date
 * @property string $name
 * @property string $email
 * @property integer $category_id
 * @property string $gender
 * @property string $address
 * @property string $date_of_birth
 * @property integer $pincode
 * @property string $parent_name
 * @property string $parent_phone
 * @property string $home_number
 * @property string $mobile
 * @property integer $course_id
 * @property integer $batch_id
 *
 * The followings are the available model relations:
 * @property StudentCategory $category
 * @property Batches $batch
 * @property Courses $course
 */
class Students extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'students';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('admission_number, name, category_id, gender, parent_name, parent_phone, course_id, batch_id', 'required'),
			array('category_id, pincode, course_id, batch_id', 'numerical', 'integerOnly'=>true),
			array('admission_number, name, email, parent_name', 'length', 'max'=>45),
			array('gender, status', 'length', 'max'=>1),
			array('parent_phone, home_number, mobile', 'length', 'max'=>14),
			array('admission_date, address, date_of_birth', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, admission_number, admission_date, name, email, category_id, gender,status, address, date_of_birth, pincode, parent_name, parent_phone, home_number, mobile, course_id, batch_id', 'safe', 'on'=>'search'),
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
			'category' => array(self::BELONGS_TO, 'StudentCategory', 'category_id'),
			'batch' => array(self::BELONGS_TO, 'Batches', 'batch_id'),
			'course' => array(self::BELONGS_TO, 'Courses', 'course_id'),
                        'fees' => array(self::HAS_MANY, 'FeesPayment', 'student_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'admission_number' => 'Admission Number',
			'admission_date' => 'Admission Date',
			'name' => 'Name',
			'email' => 'Email',
			'category_id' => 'Category',
			'gender' => 'Gender',
			'address' => 'Address',
			'date_of_birth' => 'Date Of Birth',
			'pincode' => 'Pincode',
			'parent_name' => 'Parent Name',
			'parent_phone' => 'Parent Phone',
			'home_number' => 'Home Number',
			'mobile' => 'Mobile',
			'course_id' => 'Course',
			'batch_id' => 'Batch',
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
                
                $criteria->addCondition('t.status = :st');
                $criteria->params = array(':st' => 'A');

		$criteria->compare('id',$this->id);
		$criteria->compare('admission_number',$this->admission_number,true);
		$criteria->compare('admission_date',$this->admission_date,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('date_of_birth',$this->date_of_birth,true);
		$criteria->compare('pincode',$this->pincode);
		$criteria->compare('parent_name',$this->parent_name,true);
		$criteria->compare('parent_phone',$this->parent_phone,true);
		$criteria->compare('home_number',$this->home_number,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('course_id',$this->course_id);
		$criteria->compare('batch_id',$this->batch_id);
                $criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Students the static model class
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
        $this->admission_date= ('' == $this->admission_date)? '0000-00-00' : date("Y-m-d", strtotime($this->admission_date));
        $this->date_of_birth= ('' == $this->date_of_birth)? '0000-00-00' : date("Y-m-d", strtotime($this->date_of_birth));
        return TRUE;
        }

        public function afterFind()
        {
        $this->admission_date = ('0000-00-00' == $this->admission_date)? '' :date("d-m-Y",strtotime($this->admission_date));
        $this->date_of_birth = ('0000-00-00' == $this->date_of_birth)? '' :date("d-m-Y",strtotime($this->date_of_birth));
        return true;
        }
}
