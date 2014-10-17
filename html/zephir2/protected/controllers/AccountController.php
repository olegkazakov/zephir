<?php

class AccountController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Account'),
		));
	}

	public function actionCreate() {
		$model = new Account;

		$this->performAjaxValidation($model, 'account-form');

		if (isset($_POST['Account'])) {
			$model->setAttributes($_POST['Account']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->account_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Account');

		$this->performAjaxValidation($model, 'account-form');

		if (isset($_POST['Account'])) {
			$model->setAttributes($_POST['Account']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->account_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Account')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Account');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Account('search');
		$model->unsetAttributes();

		if (isset($_GET['Account']))
			$model->setAttributes($_GET['Account']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}