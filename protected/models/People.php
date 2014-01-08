<?php

/**
 * This is the model class for table "{{people}}".
 *
 * The followings are the available columns in table '{{people}}':
 * @property string $file_id
 * @property double $population
 * @property integer $age_start
 * @property integer $age_end
 * @property string $country
 * @property string $state
 * @property string $city
 * @property string $zip_code
 *
 * The followings are the available model relations:
 * @property Files $file
 */
class People extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{people}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('file_id, population, age_start, age_end, zip_code', 'required'),
			array('age_start, age_end', 'numerical', 'integerOnly'=>true),
			array('population', 'numerical'),
			array('file_id', 'length', 'max'=>20),
			array('country', 'length', 'max'=>2),
			array('state', 'length', 'max'=>5),
			array('city', 'length', 'max'=>60),
			array('zip_code', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('file_id, population, age_start, age_end, country, state, city, zip_code', 'safe', 'on'=>'search'),
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
			'file' => array(self::BELONGS_TO, 'Files', 'file_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'file_id' => 'File',
			'population' => 'Population',
			'age_start' => 'Age Start',
			'age_end' => 'Age End',
			'country' => 'Country',
			'state' => 'State',
			'city' => 'City',
			'zip_code' => 'Zip Code',
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

		$criteria->compare('file_id',$this->file_id,true);
		$criteria->compare('population',$this->population);
		$criteria->compare('age_start',$this->age_start);
		$criteria->compare('age_end',$this->age_end);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('zip_code',$this->zip_code,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return People the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
