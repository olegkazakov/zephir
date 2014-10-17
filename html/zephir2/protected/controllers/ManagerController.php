<?php

class ManagerController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Manager'),
		));
	}

	public function actionCreate() {
		$model = new Manager;

		$this->performAjaxValidation($model, 'manager-form');

		if (isset($_POST['Manager'])) {
			$model->setAttributes($_POST['Manager']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->manager_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Manager');

		$this->performAjaxValidation($model, 'manager-form');

		if (isset($_POST['Manager'])) {
			$model->setAttributes($_POST['Manager']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->manager_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Manager')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Manager');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Manager('search');
		$model->unsetAttributes();

		if (isset($_GET['Manager']))
			$model->setAttributes($_GET['Manager']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}