<?php

/**
 * This is the model base class for the table "manager".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Manager".
 *
 * Columns in table "manager" available as properties of the model,
 * followed by relations of table "manager" available as properties of the model.
 *
 * @property integer $manager_id
 * @property string $login
 * @property string $password
 * @property string $role
 * @property string $last_login
 * @property string $reg_date
 *
 * @property DocLinks[] $docLinks
 * @property ManagerInfo $managerInfo
 * @property UserInfo[] $userInfos
 */
abstract class BaseManager extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'manager';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Manager|Managers', $n);
	}

	public static function representingColumn() {
		return 'login';
	}

	public function rules() {
		return array(
			array('login, password', 'required'),
			array('login, role', 'length', 'max'=>45),
			array('password', 'length', 'max'=>100),
			array('last_login, reg_date', 'safe'),
			array('role, last_login, reg_date', 'default', 'setOnEmpty' => true, 'value' => null),
			array('manager_id, login, password, role, last_login, reg_date', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'docLinks' => array(self::HAS_MANY, 'DocLinks', 'manager_id'),
			'managerInfo' => array(self::HAS_ONE, 'ManagerInfo', 'manager_info_id'),
			'userInfos' => array(self::HAS_MANY, 'UserInfo', 'manager_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'manager_id' => Yii::t('app', 'Manager'),
			'login' => Yii::t('app', 'Login'),
			'password' => Yii::t('app', 'Password'),
			'role' => Yii::t('app', 'Role'),
			'last_login' => Yii::t('app', 'Last Login'),
			'reg_date' => Yii::t('app', 'Reg Date'),
			'docLinks' => null,
			'managerInfo' => null,
			'userInfos' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('manager_id', $this->manager_id);
		$criteria->compare('login', $this->login, true);
		$criteria->compare('password', $this->password, true);
		$criteria->compare('role', $this->role, true);
		$criteria->compare('last_login', $this->last_login, true);
		$criteria->compare('reg_date', $this->reg_date, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}