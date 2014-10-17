<?php

class DevicePartController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'DevicePart'),
		));
	}

	public function actionCreate() {
		$model = new DevicePart;

		$this->performAjaxValidation($model, 'device-part-form');

		if (isset($_POST['DevicePart'])) {
			$model->setAttributes($_POST['DevicePart']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->device_part_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'DevicePart');

		$this->performAjaxValidation($model, 'device-part-form');

		if (isset($_POST['DevicePart'])) {
			$model->setAttributes($_POST['DevicePart']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->device_part_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'DevicePart')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('DevicePart');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new DevicePart('search');
		$model->unsetAttributes();

		if (isset($_GET['DevicePart']))
			$model->setAttributes($_GET['DevicePart']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}