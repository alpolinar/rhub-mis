<?php

/**
 * This is the model class for table "{{files}}".
 *
 * The followings are the available columns in table '{{files}}':
 * @property string $id
 * @property string $file_type_id
 * @property string $name
 * @property string $description
 * @property string $start
 * @property string $end
 * @property string $created
 * @property string $updated
 * @property string $user_id
 *
 * The followings are the available model relations:
 * @property BusinessComponents $businessComponents
 * @property ExternalEnvironments $externalEnvironments
 * @property FileRelations[] $fileRelations
 * @property FileRelations[] $fileRelations1
 * @property Tags[] $misTags
 * @property User $user
 * @property People $people
 * @property SwotFiles[] $swotFiles
 * @property SwotFiles[] $swotFiles1
 * @property SwotTags[] $swotTags
 * @property TargetMarkets $targetMarkets
 */
class Files extends CActiveRecord
{
	const FILE_TYPE_PEOPLE = 1;
	const FILE_TYPE_BUSINESS_COMPONENT = 2;
	const FILE_TYPE_EXTERNAL_ENVIRONMENT = 3;
	const FILE_TYPE_TARGET_MARKETS = 4;
	const FILE_TYPE_SWOT = 5;
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{files}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('file_type_id, updated, user_id', 'required'),
			array('file_type_id', 'length', 'max'=>20),
			array('name', 'length', 'max'=>70),
			array('user_id', 'length', 'max'=>19),
			array('description, start, end, created', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, file_type_id, name, description, start, end, created, updated, user_id', 'safe', 'on'=>'search'),
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
			'businessComponents' => array(self::HAS_ONE, 'BusinessComponents', 'file_id'),
			'externalEnvironments' => array(self::HAS_ONE, 'ExternalEnvironments', 'file_id'),
			'fileRelations' => array(self::HAS_MANY, 'FileRelations', 'file_id'),
			'fileRelations1' => array(self::HAS_MANY, 'FileRelations', 'child_file_id'),
			'misTags' => array(self::MANY_MANY, 'Tags', '{{file_tags}}(file_id, tag_id)'),
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
			'people' => array(self::HAS_ONE, 'People', 'file_id'),
			'swotFiles' => array(self::HAS_MANY, 'SwotFiles', 'file_id'),
			'swotFiles1' => array(self::HAS_MANY, 'SwotFiles', 'child_file_id'),
			'swotTags' => array(self::HAS_MANY, 'SwotTags', 'file_id'),
			'targetMarkets' => array(self::HAS_ONE, 'TargetMarkets', 'file_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'file_type_id' => 'File Type',
			'name' => 'Name',
			'description' => 'Description',
			'start' => 'Start',
			'end' => 'End',
			'created' => 'Created',
			'updated' => 'Updated',
			'user_id' => 'User',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('file_type_id',$this->file_type_id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('start',$this->start,true);
		$criteria->compare('end',$this->end,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('updated',$this->updated,true);
		$criteria->compare('user_id',$this->user_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Files the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function beforeValidate()
	{
		if ($this->isNewRecord && NULL === $this->created)
			$this->created = date("Y-m-d H:i:s", $_SERVER['REQUEST_TIME']);
		
		if (NULL === $this->user_id)
			$this->user_id = 1;
		
		$this->updated = date("Y-m-d H:i:s", $_SERVER['REQUEST_TIME']);
		return parent::beforeValidate();
	}
	
	public function uniqueName($attribute, $params)
	{
		$data = $this->find('name = :name', array(':name' => $this->name));
		if (NULL !== $data) {
			$this->addError('name', 'The file name is already in use.');
		}
	}
}
