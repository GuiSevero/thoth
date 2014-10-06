<?php

/**
 * This is the model class for table "projeto".
 *
 * The followings are the available columns in table 'projeto':
 * @property integer $cod_projeto
 * @property string $descricao
 * @property integer $cod_tag
 * @property integer $cod_usuario
 *
 * The followings are the available model relations:
 * @property Tag $tag
 * @property Usuario $usuario
 * @property Contribuicao[] $contribuicoes
 */
class Projeto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Projeto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'projeto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descricao, cod_tag, cod_usuario', 'required'),
			array('cod_tag, cod_usuario', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_projeto, descricao, cod_tag, cod_usuario', 'safe', 'on'=>'search'),
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
			'tag' => array(self::BELONGS_TO, 'Tag', 'cod_tag'),
			'usuario' => array(self::BELONGS_TO, 'Usuario', 'cod_usuario'),
			'contribuicoes' => array(self::HAS_MANY, 'Contribuicao', 'cod_projeto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_projeto' => 'Cod Projeto',
			'descricao' => 'Descricao',
			'cod_tag' => 'Cod Tag',
			'cod_usuario' => 'Cod Usuario',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('cod_projeto',$this->cod_projeto);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('cod_tag',$this->cod_tag);
		$criteria->compare('cod_usuario',$this->cod_usuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}