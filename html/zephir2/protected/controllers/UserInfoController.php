<?php

class UserInfoController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'UserInfo'),
		));
	}

	public function actionCreate() {
		$model = new UserInfo;

		$this->performAjaxValidation($model, 'user-info-form');

		if (isset($_POST['UserInfo'])) {
			$model->setAttributes($_POST['UserInfo']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->user_info_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'UserInfo');

		$this->performAjaxValidation($model, 'user-info-form');

		if (isset($_POST['UserInfo'])) {
			$model->setAttributes($_POST['UserInfo']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->user_info_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'UserInfo')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('UserInfo');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new UserInfo('search');
		$model->unsetAttributes();

		if (isset($_GET['UserInfo']))
			$model->setAttributes($_GET['UserInfo']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}