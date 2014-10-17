<?php

/**
 * This is the model base class for the table "doc_links".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "DocLinks".
 *
 * Columns in table "doc_links" available as properties of the model,
 * followed by relations of table "doc_links" available as properties of the model.
 *
 * @property integer $doc_id
 * @property integer $official_id
 * @property string $link
 * @property integer $manager_id
 * @property integer $status_id
 * @property string $comment
 *
 * @property Manager $manager
 * @property Official $official
 * @property DocStatus $status
 */
abstract class BaseDocLinks extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'doc_links';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'DocLinks|DocLinks', $n);
	}

	public static function representingColumn() {
		return 'link';
	}

	public function rules() {
		return array(
			array('official_id, link, manager_id', 'required'),
			array('official_id, manager_id, status_id', 'numerical', 'integerOnly'=>true),
			array('link, comment', 'length', 'max'=>255),
			array('status_id, comment', 'default', 'setOnEmpty' => true, 'value' => null),
			array('doc_id, official_id, link, manager_id, status_id, comment', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'manager' => array(self::BELONGS_TO, 'Manager', 'manager_id'),
			'official' => array(self::BELONGS_TO, 'Official', 'official_id'),
			'status' => array(self::BELONGS_TO, 'DocStatus', 'status_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'doc_id' => Yii::t('app', 'Doc'),
			'official_id' => null,
			'link' => Yii::t('app', 'Link'),
			'manager_id' => null,
			'status_id' => null,
			'comment' => Yii::t('app', 'Comment'),
			'manager' => null,
			'official' => null,
			'status' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('doc_id', $this->doc_id);
		$criteria->compare('official_id', $this->official_id);
		$criteria->compare('link', $this->link, true);
		$criteria->compare('manager_id', $this->manager_id);
		$criteria->compare('status_id', $this->status_id);
		$criteria->compare('comment', $this->comment, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}