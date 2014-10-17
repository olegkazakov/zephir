<?php

class DocLinksController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'DocLinks'),
		));
	}

	public function actionCreate() {
		$model = new DocLinks;

		$this->performAjaxValidation($model, 'doc-links-form');

		if (isset($_POST['DocLinks'])) {
			$model->setAttributes($_POST['DocLinks']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->doc_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'DocLinks');

		$this->performAjaxValidation($model, 'doc-links-form');

		if (isset($_POST['DocLinks'])) {
			$model->setAttributes($_POST['DocLinks']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->doc_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'DocLinks')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('DocLinks');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new DocLinks('search');
		$model->unsetAttributes();

		if (isset($_GET['DocLinks']))
			$model->setAttributes($_GET['DocLinks']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}