<?php

/**
 * This is the model class for table "fees_payment".
 *
 * The followings are the available columns in table 'fees_payment':
 * @property integer $id
 * @property string $fees_receipt_number
 * @property integer $batch_id
 * @property integer $student_id
 * @property integer $fees_collection_id
 * @property string $fees_payment_date
 * @property string $payment_mode
 * @property string $payment_remark
 * @property double $paid_amount
 * @property string $status
 *
 * The followings are the available model relations:
 * @property Batches $batch
 */
class FeesPayment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fees_payment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fees_receipt_number, batch_id, student_id, fees_collection_id, payment_mode, fees_payment_date, paid_amount', 'required'),
			array('batch_id, student_id, fees_collection_id', 'numerical', 'integerOnly'=>true),
			array('paid_amount', 'numerical'),
			array('fees_receipt_number', 'length', 'max'=>20),
			array('payment_mode', 'length', 'max'=>6),
			array('payment_remark', 'length', 'max'=>60),
			array('status', 'length', 'max'=>1),
			array('fees_payment_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fees_receipt_number, batch_id, student_id, fees_collection_id, fees_payment_date, payment_mode, payment_remark, paid_amount, status', 'safe', 'on'=>'search'),
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
			'batch' => array(self::BELONGS_TO, 'Batches', 'batch_id'),
                        'student' => array(self::BELONGS_TO, 'Students', 'student_id'),
                        'fees_collection' => array(self::BELONGS_TO, 'FeesCollection', 'fees_collection_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fees_receipt_number' => 'Fees Receipt Number',
			'batch_id' => 'Batch',
			'student_id' => 'Student',
			'fees_collection_id' => 'Fees Collection',
			'fees_payment_date' => 'Fees Payment Date',
			'payment_mode' => 'Payment Mode',
			'payment_remark' => 'Payment Remark',
			'paid_amount' => 'Paid Amount',
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
		$criteria->compare('fees_receipt_number',$this->fees_receipt_number,true);
		$criteria->compare('batch_id',$this->batch_id);
		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('fees_collection_id',$this->fees_collection_id);
		$criteria->compare('fees_payment_date',$this->fees_payment_date,true);
		$criteria->compare('payment_mode',$this->payment_mode,true);
		$criteria->compare('payment_remark',$this->payment_remark,true);
		$criteria->compare('paid_amount',$this->paid_amount);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FeesPayment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        protected function beforeSave()
        {
        $this->fees_payment_date= ('' == $this->fees_payment_date)? '0000-00-00' : date("Y-m-d", strtotime($this->fees_payment_date));
        
        return TRUE;
        }

        public function afterFind()
        {
        $this->fees_payment_date = ('0000-00-00' == $this->fees_payment_date)? '' :date("d-m-Y",strtotime($this->fees_payment_date));
        
        return true;
        }
}
