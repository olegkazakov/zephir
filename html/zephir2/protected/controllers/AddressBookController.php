<?php

class AddressBookController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'AddressBook'),
		));
	}

	public function actionCreate() {
		$model = new AddressBook;

		$this->performAjaxValidation($model, 'address-book-form');

		if (isset($_POST['AddressBook'])) {
			$model->setAttributes($_POST['AddressBook']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->address_book_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'AddressBook');

		$this->performAjaxValidation($model, 'address-book-form');

		if (isset($_POST['AddressBook'])) {
			$model->setAttributes($_POST['AddressBook']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->address_book_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'AddressBook')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('AddressBook');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new AddressBook('search');
		$model->unsetAttributes();

		if (isset($_GET['AddressBook']))
			$model->setAttributes($_GET['AddressBook']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}