<?php

/**
 * This is the model class for table "donations".
 *
 * The followings are the available columns in table 'donations':
 * @property integer $id
 * @property string $donor_name
 * @property string $description
 * @property string $donation_date
 * @property double $amount
 * @property string $status
 */
class Donations extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'donations';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('donor_name', 'required'),
			array('amount', 'numerical'),
			array('donor_name', 'length', 'max'=>60),
			array('description', 'length', 'max'=>100),
			array('status', 'length', 'max'=>1),
			array('donation_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, donor_name, description, donation_date, amount, status', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'donor_name' => 'Donor Name',
			'description' => 'Description',
			'donation_date' => 'Donation Date',
			'amount' => 'Amount',
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
		$criteria->compare('donor_name',$this->donor_name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('donation_date',$this->donation_date,true);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Donations the static model class
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
        $this->donation_date= ('' == $this->donation_date)? '0000-00-00' : date("Y-m-d", strtotime($this->donation_date));
        return true;
        }

        public function afterFind()
        {
        $this->donation_date = ('0000-00-00' == $this->donation_date)? '' :date("d-m-Y",strtotime($this->donation_date));
        return true;
        }
}
