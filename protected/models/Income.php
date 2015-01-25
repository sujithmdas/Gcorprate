<?php

/**
 * This is the model class for table "income".
 *
 * The followings are the available columns in table 'income':
 * @property integer $id
 * @property string $income_title
 * @property string $description
 * @property double $amount
 * @property string $income_date
 * @property integer $finance_category_id
 *
 * The followings are the available model relations:
 * @property FinanceCategory $financeCategory
 */
class Income extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'income';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('income_title, finance_category_id', 'required'),
			array('finance_category_id', 'numerical', 'integerOnly'=>true),
			array('amount', 'numerical'),
			array('income_title', 'length', 'max'=>60),
			array('description', 'length', 'max'=>100),
			array('income_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, income_title, description, amount, income_date, finance_category_id', 'safe', 'on'=>'search'),
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
			'financeCategory' => array(self::BELONGS_TO, 'FinanceCategory', 'finance_category_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'income_title' => 'Income Title',
			'description' => 'Description',
			'amount' => 'Amount',
			'income_date' => 'Income Date',
			'finance_category_id' => 'Finance Category',
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
		$criteria->compare('income_title',$this->income_title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('income_date',$this->income_date,true);
		$criteria->compare('finance_category_id',$this->finance_category_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Income the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        protected function beforeSave()
        {
        $this->income_date= ('' == $this->income_date)? '0000-00-00' : date("Y-m-d", strtotime($this->income_date));
        return true;
        }

        public function afterFind()
        {
        $this->income_date = ('0000-00-00' == $this->income_date)? '' :date("d-m-Y",strtotime($this->income_date));
        return true;
        }
}
