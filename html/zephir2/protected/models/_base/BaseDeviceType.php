<?php

/**
 * This is the model base class for the table "device_type".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "DeviceType".
 *
 * Columns in table "device_type" available as properties of the model,
 * followed by relations of table "device_type" available as properties of the model.
 *
 * @property integer $device_model_id
 * @property integer $device_type
 * @property string $device_name
 * @property string $device_descr
 * @property double $part_price
 * @property string $device_img_link
 *
 * @property Device[] $devices
 */
abstract class BaseDeviceType extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'device_type';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'DeviceType|DeviceTypes', $n);
	}

	public static function representingColumn() {
		return 'device_name';
	}

	public function rules() {
		return array(
			array('device_name, device_descr, part_price', 'required'),
			array('device_type', 'numerical', 'integerOnly'=>true),
			array('part_price', 'numerical'),
			array('device_name', 'length', 'max'=>45),
			array('device_descr, device_img_link', 'length', 'max'=>255),
			array('device_type, device_img_link', 'default', 'setOnEmpty' => true, 'value' => null),
			array('device_model_id, device_type, device_name, device_descr, part_price, device_img_link', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'devices' => array(self::HAS_MANY, 'Device', 'device_model_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'device_model_id' => Yii::t('app', 'Device Model'),
			'device_type' => Yii::t('app', 'Device Type'),
			'device_name' => Yii::t('app', 'Device Name'),
			'device_descr' => Yii::t('app', 'Device Descr'),
			'part_price' => Yii::t('app', 'Part Price'),
			'device_img_link' => Yii::t('app', 'Device Img Link'),
			'devices' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('device_model_id', $this->device_model_id);
		$criteria->compare('device_type', $this->device_type);
		$criteria->compare('device_name', $this->device_name, true);
		$criteria->compare('device_descr', $this->device_descr, true);
		$criteria->compare('part_price', $this->part_price);
		$criteria->compare('device_img_link', $this->device_img_link, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}