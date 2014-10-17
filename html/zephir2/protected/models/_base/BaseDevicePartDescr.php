<?php

/**
 * This is the model base class for the table "device_part_descr".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "DevicePartDescr".
 *
 * Columns in table "device_part_descr" available as properties of the model,
 * followed by relations of table "device_part_descr" available as properties of the model.
 *
 * @property integer $part_descr_id
 * @property string $descr_name
 * @property string $descr_body
 * @property double $part_price
 * @property string $part_img_link
 *
 * @property DevicePart[] $deviceParts
 */
abstract class BaseDevicePartDescr extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'device_part_descr';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'DevicePartDescr|DevicePartDescrs', $n);
	}

	public static function representingColumn() {
		return 'descr_name';
	}

	public function rules() {
		return array(
			array('descr_name, descr_body, part_price', 'required'),
			array('part_price', 'numerical'),
			array('descr_name', 'length', 'max'=>45),
			array('descr_body, part_img_link', 'length', 'max'=>255),
			array('part_img_link', 'default', 'setOnEmpty' => true, 'value' => null),
			array('part_descr_id, descr_name, descr_body, part_price, part_img_link', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'deviceParts' => array(self::HAS_MANY, 'DevicePart', 'part_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'part_descr_id' => Yii::t('app', 'Part Descr'),
			'descr_name' => Yii::t('app', 'Descr Name'),
			'descr_body' => Yii::t('app', 'Descr Body'),
			'part_price' => Yii::t('app', 'Part Price'),
			'part_img_link' => Yii::t('app', 'Part Img Link'),
			'deviceParts' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('part_descr_id', $this->part_descr_id);
		$criteria->compare('descr_name', $this->descr_name, true);
		$criteria->compare('descr_body', $this->descr_body, true);
		$criteria->compare('part_price', $this->part_price);
		$criteria->compare('part_img_link', $this->part_img_link, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}