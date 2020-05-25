<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property string $usu_usuario
 * @property string $usu_password
 * @property string $usu_email
 * @property string $usu_ucreacion
 * @property string $usu_fhcreacion
 * @property string $usu_umodif
 * @property string $usu_fhmodif
 */
class Usuario extends CActiveRecord
{
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
			array('usu_usuario, usu_password, usu_email, usu_ucreacion, usu_fhcreacion, usu_umodif', 'required'),
			array('usu_usuario, usu_password, usu_email, usu_ucreacion, usu_umodif', 'length', 'max'=>50),
			array('usu_fhmodif', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('usu_usuario, usu_password, usu_email, usu_ucreacion, usu_fhcreacion, usu_umodif, usu_fhmodif', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'usu_usuario' => 'Usu Usuario',
			'usu_password' => 'Usu Password',
			'usu_email' => 'Usu Email',
			'usu_ucreacion' => 'Usu Ucreacion',
			'usu_fhcreacion' => 'Usu Fhcreacion',
			'usu_umodif' => 'Usu Umodif',
			'usu_fhmodif' => 'Usu Fhmodif',
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

		$criteria->compare('usu_usuario',$this->usu_usuario,true);
		$criteria->compare('usu_password',$this->usu_password,true);
		$criteria->compare('usu_email',$this->usu_email,true);
		$criteria->compare('usu_ucreacion',$this->usu_ucreacion,true);
		$criteria->compare('usu_fhcreacion',$this->usu_fhcreacion,true);
		$criteria->compare('usu_umodif',$this->usu_umodif,true);
		$criteria->compare('usu_fhmodif',$this->usu_fhmodif,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
