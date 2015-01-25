<?php

/**
 * This is the model class for table "fees_collection".
 *
 * The followings are the available columns in table 'fees_collection':
 * @property integer $id
 * @property string $fees_collection_name
 * @property integer $fees_category_id
 * @property integer $fine_id
 * @property string $start_date
 * @property string $end_date
 * @property string $due_date
 * @property string $status
 */
class FeesCollection extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fees_collection';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fees_collection_name, fees_category_id, fine_id, start_date, end_date, due_date', 'required'),
			array('fees_category_id, fine_id', 'numerical', 'integerOnly'=>true),
			array('fees_collection_name', 'length', 'max'=>45),
			array('status', 'length', 'max'=>1),
			array('start_date, end_date, due_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fees_collection_name, fees_category_id, fine_id, start_date, end_date, due_date, status', 'safe', 'on'=>'search'),
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
                        'feesCategory' => array(self::BELONGS_TO, 'FeesCategory', 'fees_category_id'),
			'fine' => array(self::BELONGS_TO, 'Fine', 'fine_id'),
                        'fees' => array(self::HAS_MANY, 'FeesPayment', 'fees_collection_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fees_collection_name' => 'Fees Collection Name',
			'fees_category_id' => 'Fees Category',
			'fine_id' => 'Fine',
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
			'due_date' => 'Due Date',
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
		$criteria->compare('fees_collection_name',$this->fees_collection_name,true);
		$criteria->compare('fees_category_id',$this->fees_category_id);
		$criteria->compare('fine_id',$this->fine_id);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('end_date',$this->end_date,true);
		$criteria->compare('due_date',$this->due_date,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FeesCollection the static model class
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
        $this->due_date= ('' == $this->due_date)? '0000-00-00' : date("Y-m-d", strtotime($this->due_date));
        return TRUE;
        }

        public function afterFind()
        {
        $this->start_date = ('0000-00-00' == $this->start_date)? '' :date("d-m-Y",strtotime($this->start_date));
        $this->end_date = ('0000-00-00' == $this->end_date)? '' :date("d-m-Y",strtotime($this->end_date));
        $this->due_date = ('0000-00-00' == $this->due_date)? '' :date("d-m-Y",strtotime($this->due_date));
        return true;
        }
}
