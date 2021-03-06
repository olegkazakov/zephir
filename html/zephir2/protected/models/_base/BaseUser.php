<?php

/**
 * This is the model base class for the table "user".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "User".
 *
 * Columns in table "user" available as properties of the model,
 * followed by relations of table "user" available as properties of the model.
 *
 * @property integer $user_id
 * @property string $login
 * @property string $password
 * @property string $last_login
 * @property string $reg_date
 *
 * @property AddressBook[] $addressBooks
 * @property Official[] $officials
 * @property UserInfo[] $userInfos
 */
abstract class BaseUser extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'user';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'User|Users', $n);
	}

	public static function representingColumn() {
		return 'login';
	}

	public function rules() {
		return array(
			array('login, password', 'required'),
			array('login', 'length', 'max'=>45),
			array('password', 'length', 'max'=>100),
			array('last_login, reg_date', 'safe'),
			array('last_login, reg_date', 'default', 'setOnEmpty' => true, 'value' => null),
			array('user_id, login, password, last_login, reg_date', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'addressBooks' => array(self::HAS_MANY, 'AddressBook', 'user_id'),
			'officials' => array(self::HAS_MANY, 'Official', 'user_id'),
			'userInfos' => array(self::HAS_MANY, 'UserInfo', 'user_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'user_id' => Yii::t('app', 'User'),
			'login' => Yii::t('app', 'Login'),
			'password' => Yii::t('app', 'Password'),
			'last_login' => Yii::t('app', 'Last Login'),
			'reg_date' => Yii::t('app', 'Reg Date'),
			'addressBooks' => null,
			'officials' => null,
			'userInfos' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('user_id', $this->user_id);
		$criteria->compare('login', $this->login, true);
		$criteria->compare('password', $this->password, true);
		$criteria->compare('last_login', $this->last_login, true);
		$criteria->compare('reg_date', $this->reg_date, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}