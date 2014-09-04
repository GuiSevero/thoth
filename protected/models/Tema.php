<?php

/**
 * This is the model class for table "tema".
 *
 * The followings are the available columns in table 'tema':
 * @property integer $cod_tema
 * @property integer $cod_area
 * @property string $assunto
 * @property string $texto_disparador
 * @property string $imagem
 * @property integer $cod_usuario
 *
 * The followings are the available model relations:
 * @property Tag[] $tags
 * @property Area $codArea
 * @property Usuario $codUsuario
 */
class Tema extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tema the static model class
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
		return 'tema';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_area, assunto, texto_disparador, imagem, cod_usuario', 'required'),
			array('cod_area, cod_usuario', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_tema, cod_area, assunto, texto_disparador, imagem, cod_usuario', 'safe', 'on'=>'search'),
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
			'tags' => array(self::HAS_MANY, 'Tag', 'cod_tema'),
			'projetos' => array(self::HAS_MANY, 'Projeto', 'cod_tema', 'through'=>'tags'),
			'area' => array(self::BELONGS_TO, 'Area', 'cod_area'),
			'usuario' => array(self::BELONGS_TO, 'Usuario', 'cod_usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_tema' => 'Cod Tema',
			'cod_area' => 'Cod Area',
			'assunto' => 'Assunto',
			'texto_disparador' => 'Texto Disparador',
			'imagem' => 'Imagem',
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

		$criteria->compare('cod_tema',$this->cod_tema);
		$criteria->compare('cod_area',$this->cod_area);
		$criteria->compare('assunto',$this->assunto,true);
		$criteria->compare('texto_disparador',$this->texto_disparador,true);
		$criteria->compare('imagem',$this->imagem,true);
		$criteria->compare('cod_usuario',$this->cod_usuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}