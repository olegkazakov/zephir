<?php

class DeviceStatusController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'DeviceStatus'),
		));
	}

	public function actionCreate() {
		$model = new DeviceStatus;

		$this->performAjaxValidation($model, 'device-status-form');

		if (isset($_POST['DeviceStatus'])) {
			$model->setAttributes($_POST['DeviceStatus']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->device_status_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'DeviceStatus');

		$this->performAjaxValidation($model, 'device-status-form');

		if (isset($_POST['DeviceStatus'])) {
			$model->setAttributes($_POST['DeviceStatus']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->device_status_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'DeviceStatus')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('DeviceStatus');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new DeviceStatus('search');
		$model->unsetAttributes();

		if (isset($_GET['DeviceStatus']))
			$model->setAttributes($_GET['DeviceStatus']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}