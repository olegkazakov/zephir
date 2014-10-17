<?php

class DocStatusController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'DocStatus'),
		));
	}

	public function actionCreate() {
		$model = new DocStatus;

		$this->performAjaxValidation($model, 'doc-status-form');

		if (isset($_POST['DocStatus'])) {
			$model->setAttributes($_POST['DocStatus']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->doc_status_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'DocStatus');

		$this->performAjaxValidation($model, 'doc-status-form');

		if (isset($_POST['DocStatus'])) {
			$model->setAttributes($_POST['DocStatus']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->doc_status_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'DocStatus')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('DocStatus');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new DocStatus('search');
		$model->unsetAttributes();

		if (isset($_GET['DocStatus']))
			$model->setAttributes($_GET['DocStatus']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}