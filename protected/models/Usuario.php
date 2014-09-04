<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $cod_usuario
 * @property string $nome
 * @property string $nome_completo
 * @property string $sobrenome
 * @property string $email
 * @property string $senha
 *
 * The followings are the available model relations:
 * @property Projeto[] $projetos
 * @property Tema[] $temas
 * @property Contribuicao[] $contribuicaos
 */
class Usuario extends CActiveRecord
{

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuario the static model class
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
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, nome_completo, sobrenome, email, roles', 'required'),
			array('senha', 'length', 'max'=>32),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_usuario, nome, nome_completo, sobrenome, email, senha, roles', 'safe', 'on'=>'search'),
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
			'projetos' => array(self::HAS_MANY, 'Projeto', 'cod_usuario'),
			'temas' => array(self::HAS_MANY, 'Tema', 'cod_usuario'),
			'contribuicaos' => array(self::HAS_MANY, 'Contribuicao', 'cod_usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_usuario' => 'Cod Usuario',
			'nome' => 'Nome',
			'nome_completo' => 'Nome Completo',
			'sobrenome' => 'Sobrenome',
			'email' => 'Email',
			'senha' => 'Senha',
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

		$criteria->compare('cod_usuario',$this->cod_usuario);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('nome_completo',$this->nome_completo,true);
		$criteria->compare('sobrenome',$this->sobrenome,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('senha',$this->senha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}