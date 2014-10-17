<?php

class DevicePartDescrController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'DevicePartDescr'),
		));
	}

	public function actionCreate() {
		$model = new DevicePartDescr;

		$this->performAjaxValidation($model, 'device-part-descr-form');

		if (isset($_POST['DevicePartDescr'])) {
			$model->setAttributes($_POST['DevicePartDescr']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->part_descr_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'DevicePartDescr');

		$this->performAjaxValidation($model, 'device-part-descr-form');

		if (isset($_POST['DevicePartDescr'])) {
			$model->setAttributes($_POST['DevicePartDescr']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->part_descr_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'DevicePartDescr')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('DevicePartDescr');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new DevicePartDescr('search');
		$model->unsetAttributes();

		if (isset($_GET['DevicePartDescr']))
			$model->setAttributes($_GET['DevicePartDescr']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}