<?php

class FirmTypeController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'FirmType'),
		));
	}

	public function actionCreate() {
		$model = new FirmType;

		$this->performAjaxValidation($model, 'firm-type-form');

		if (isset($_POST['FirmType'])) {
			$model->setAttributes($_POST['FirmType']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->firm_type_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'FirmType');

		$this->performAjaxValidation($model, 'firm-type-form');

		if (isset($_POST['FirmType'])) {
			$model->setAttributes($_POST['FirmType']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->firm_type_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'FirmType')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('FirmType');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new FirmType('search');
		$model->unsetAttributes();

		if (isset($_GET['FirmType']))
			$model->setAttributes($_GET['FirmType']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}