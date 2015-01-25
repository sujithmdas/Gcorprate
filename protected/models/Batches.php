<?php

/**
 * This is the model class for table "batches".
 *
 * The followings are the available columns in table 'batches':
 * @property integer $id
 * @property string $batch_name
 * @property string $start_date
 * @property string $end_date
 * @property string $status
 * @property integer $course_id
 *
 * The followings are the available model relations:
 * @property Students[] $students
 */
class Batches extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'batches';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('batch_name, course_id, start_date, end_date', 'required'),
			array('course_id', 'numerical', 'integerOnly'=>true),
			array('batch_name', 'length', 'max'=>60),
			array('status', 'length', 'max'=>1),
			array('start_date, end_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, batch_name, start_date, end_date, status, course_id', 'safe', 'on'=>'search'),
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
			'students' => array(self::HAS_MANY, 'Students', 'batch_id'),
                        'course' => array(self::BELONGS_TO, 'Courses', 'course_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'batch_name' => 'Batch Name',
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
			'status' => 'Status',
			'course_id' => 'Course',
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
		$criteria->compare('batch_name',$this->batch_name,true);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('end_date',$this->end_date,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('course_id',$this->course_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Batches the static model class
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
        $this->start_date= ('' == $this->start_date)? '0000-00-00' : date("Y-m-d", strtotime($this->start_date));
        $this->end_date= ('' == $this->end_date)? '0000-00-00' : date("Y-m-d", strtotime($this->end_date));
        return TRUE;
        }

        public function afterFind()
        {
        $this->start_date = ('0000-00-00' == $this->start_date)? '' :date("d-m-Y",strtotime($this->start_date));
        $this->end_date = ('0000-00-00' == $this->end_date)? '' :date("d-m-Y",strtotime($this->end_date));
        return true;
        }
}
