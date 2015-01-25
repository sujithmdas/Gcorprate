<?php

/**
 * This is the model class for table "payroll_category".
 *
 * The followings are the available columns in table 'payroll_category':
 * @property integer $id
 * @property string $category_name
 * @property double $percentage
 * @property integer $percentage_of
 * @property string $is_deduction
 * @property string $status
 */
class PayrollCategory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'payroll_category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category_name', 'required'),
			array('percentage_of', 'numerical', 'integerOnly'=>true),
			array('percentage', 'numerical'),
			array('category_name', 'length', 'max'=>45),
			array('is_deduction, status', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, category_name, percentage, percentage_of, is_deduction, status', 'safe', 'on'=>'search'),
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
                    'category' => array(self::BELONGS_TO, 'PayrollCategory', 'percentage_of'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'category_name' => 'Category Name',
			'percentage' => 'Percentage',
			'percentage_of' => 'Percentage Of',
			'is_deduction' => 'Is Deduction',
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
		$criteria->compare('category_name',$this->category_name,true);
		$criteria->compare('percentage',$this->percentage);
		$criteria->compare('percentage_of',$this->percentage_of);
		$criteria->compare('is_deduction',$this->is_deduction,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PayrollCategory the static model class
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
}
