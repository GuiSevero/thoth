<?php

/**
 * This is the model class for table "contribuicao".
 *
 * The followings are the available columns in table 'contribuicao':
 * @property integer $cod_contribuicao
 * @property integer $cod_projeto
 * @property string $local
 * @property integer $cod_usuario
 * @property string $data_criacao
 * @property string $texto
 *
 * The followings are the available model relations:
 * @property Projeto $codProjeto
 * @property Usuario $codUsuario
 */
class Contribuicao extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Contribuicao the static model class
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
		return 'contribuicao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_projeto, local, cod_usuario, data_criacao, texto', 'required'),
			array('cod_projeto, cod_usuario', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_contribuicao, cod_projeto, local, cod_usuario, data_criacao, texto', 'safe', 'on'=>'search'),
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
			'codProjeto' => array(self::BELONGS_TO, 'Projeto', 'cod_projeto'),
			'codUsuario' => array(self::BELONGS_TO, 'Usuario', 'cod_usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_contribuicao' => 'Cod Contribuicao',
			'cod_projeto' => 'Cod Projeto',
			'local' => 'Local',
			'cod_usuario' => 'Cod Usuario',
			'data_criacao' => 'Data Criacao',
			'texto' => 'Texto',
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

		$criteria->compare('cod_contribuicao',$this->cod_contribuicao);
		$criteria->compare('cod_projeto',$this->cod_projeto);
		$criteria->compare('local',$this->local,true);
		$criteria->compare('cod_usuario',$this->cod_usuario);
		$criteria->compare('data_criacao',$this->data_criacao,true);
		$criteria->compare('texto',$this->texto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}