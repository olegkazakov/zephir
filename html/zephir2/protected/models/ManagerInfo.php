<?php

Yii::import('application.models._base.BaseManagerInfo');

class ManagerInfo extends BaseManagerInfo
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}