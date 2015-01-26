<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $user_type
 * @property string $status
 * @property string $name
 * @property integer $student_id
 */
class Users extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, user_type_id, name, status', 'required'),
			array('username', 'length', 'max'=>50),
			array('password', 'length', 'max'=>100),
			array('user_type_id, student_id', 'numerical', 'integerOnly'=>true),
			array('status', 'length', 'max'=>1),
			array('name', 'length', 'max'=>60),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('username, user_type_id, status, name, student_id', 'safe', 'on'=>'search'),
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
                    'usertype' => array(self::BELONGS_TO, 'UserTypes', 'user_type_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'user_type_id' => 'User Type',
			'status' => 'Status',
			'name' => 'Name',
		);
	}
        
        
         /*
         * Defined by Sujith
         */
        
        // hash password
        public function hashPassword($password)
        {
            return md5($password);
        }

         //password validation
        public function validatePassword($password)
        {
            return $this->hashPassword($password)===$this->password;
        }

        //generate salt
        public function generateSalt()
        {
            return uniqid('customerfeed',true);
        }

//        public function beforeValidate()
//        {
//            $this->salt = $this->generateSalt();
//            return parent::beforeValidate();
//        }

        public function beforeSave()
        {
            $this->password = $this->hashPassword($this->password);
            return parent::beforeSave();
        }
        /*
         * Defined by Sujith ends
         */
        

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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('user_type_id',$this->user_type,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('name',$this->name,true);
		
                return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
