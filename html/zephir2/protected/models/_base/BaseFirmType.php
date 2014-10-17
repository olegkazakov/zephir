<?php

/**
 * This is the model base class for the table "firm_type".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "FirmType".
 *
 * Columns in table "firm_type" available as properties of the model,
 * followed by relations of table "firm_type" available as properties of the model.
 *
 * @property integer $firm_type_id
 * @property string $firm_type_descr
 *
 * @property Official[] $officials
 */
abstract class BaseFirmType extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'firm_type';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'FirmType|FirmTypes', $n);
	}

	public static function representingColumn() {
		return 'firm_type_descr';
	}

	public function rules() {
		return array(
			array('firm_type_descr', 'required'),
			array('firm_type_descr', 'length', 'max'=>45),
			array('firm_type_id, firm_type_descr', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'officials' => array(self::HAS_MANY, 'Official', 'firm_type_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'firm_type_id' => Yii::t('app', 'Firm Type'),
			'firm_type_descr' => Yii::t('app', 'Firm Type Descr'),
			'officials' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('firm_type_id', $this->firm_type_id);
		$criteria->compare('firm_type_descr', $this->firm_type_descr, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}