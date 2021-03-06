<?php

/**
 * This is the model class for table "{{swot_tags}}".
 *
 * The followings are the available columns in table '{{swot_tags}}':
 * @property string $file_id
 * @property string $tag_id
 * @property string $area_id
 * @property string $description
 *
 * The followings are the available model relations:
 * @property Files $file
 * @property Tags $tag
 */
class SwotTags extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{swot_tags}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('file_id, tag_id, area_id', 'required'),
			array('file_id, tag_id', 'length', 'max'=>20),
			array('area_id', 'length', 'max'=>10),
			array('description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('file_id, tag_id, area_id, description', 'safe', 'on'=>'search'),
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
			'tag' => array(self::BELONGS_TO, 'Tags', 'tag_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'file_id' => 'File',
			'tag_id' => 'Tag',
			'area_id' => 'Area',
			'description' => 'Description',
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
		$criteria->compare('tag_id',$this->tag_id,true);
		$criteria->compare('area_id',$this->area_id,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SwotTags the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
