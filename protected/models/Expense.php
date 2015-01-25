<?php

/**
 * This is the model class for table "expense".
 *
 * The followings are the available columns in table 'expense':
 * @property integer $id
 * @property string $expense_title
 * @property string $description
 * @property double $amount
 * @property string $expense_date
 * @property integer $finance_category_id
 *
 * The followings are the available model relations:
 * @property FinanceCategory $financeCategory
 */
class Expense extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'expense';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('expense_title, finance_category_id', 'required'),
			array('finance_category_id', 'numerical', 'integerOnly'=>true),
			array('amount', 'numerical'),
			array('expense_title', 'length', 'max'=>60),
			array('description', 'length', 'max'=>100),
			array('expense_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, expense_title, description, amount, expense_date, finance_category_id', 'safe', 'on'=>'search'),
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
			'expense_title' => 'Expense Title',
			'description' => 'Description',
			'amount' => 'Amount',
			'expense_date' => 'Expense Date',
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
		$criteria->compare('expense_title',$this->expense_title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('expense_date',$this->expense_date,true);
		$criteria->compare('finance_category_id',$this->finance_category_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Expense the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        protected function beforeSave()
        {
        $this->expense_date= ('' == $this->expense_date)? '0000-00-00' : date("Y-m-d", strtotime($this->expense_date));
        return TRUE;
        }

        public function afterFind()
        {
        $this->expense_date = ('0000-00-00' == $this->expense_date)? '' :date("d-m-Y",strtotime($this->expense_date));
        return true;
        }
}
