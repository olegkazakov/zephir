<?php

Yii::import('application.models._base.BaseUserInfo');

class UserInfo extends BaseUserInfo
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}