<?php

class ManagerInfoController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'ManagerInfo'),
		));
	}

	public function actionCreate() {
		$model = new ManagerInfo;

		$this->performAjaxValidation($model, 'manager-info-form');

		if (isset($_POST['ManagerInfo'])) {
			$model->setAttributes($_POST['ManagerInfo']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->manager_info_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'ManagerInfo');

		$this->performAjaxValidation($model, 'manager-info-form');

		if (isset($_POST['ManagerInfo'])) {
			$model->setAttributes($_POST['ManagerInfo']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->manager_info_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'ManagerInfo')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('ManagerInfo');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new ManagerInfo('search');
		$model->unsetAttributes();

		if (isset($_GET['ManagerInfo']))
			$model->setAttributes($_GET['ManagerInfo']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}