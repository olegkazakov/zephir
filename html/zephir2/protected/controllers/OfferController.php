<?php

class OfferController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Offer'),
		));
	}

	public function actionCreate() {
		$model = new Offer;

		$this->performAjaxValidation($model, 'offer-form');

		if (isset($_POST['Offer'])) {
			$model->setAttributes($_POST['Offer']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->offer_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Offer');

		$this->performAjaxValidation($model, 'offer-form');

		if (isset($_POST['Offer'])) {
			$model->setAttributes($_POST['Offer']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->offer_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Offer')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Offer');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Offer('search');
		$model->unsetAttributes();

		if (isset($_GET['Offer']))
			$model->setAttributes($_GET['Offer']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}