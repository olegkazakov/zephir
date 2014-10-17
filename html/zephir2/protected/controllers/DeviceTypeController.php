<?php

class DeviceTypeController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'DeviceType'),
		));
	}

	public function actionCreate() {
		$model = new DeviceType;

		$this->performAjaxValidation($model, 'device-type-form');

		if (isset($_POST['DeviceType'])) {
			$model->setAttributes($_POST['DeviceType']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->device_model_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'DeviceType');

		$this->performAjaxValidation($model, 'device-type-form');

		if (isset($_POST['DeviceType'])) {
			$model->setAttributes($_POST['DeviceType']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->device_model_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'DeviceType')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('DeviceType');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new DeviceType('search');
		$model->unsetAttributes();

		if (isset($_GET['DeviceType']))
			$model->setAttributes($_GET['DeviceType']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}