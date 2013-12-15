<?php

class PeopleController extends Controller
{

	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout = '//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow all users to perform 'index' and 'view' actions
				'actions' => array('index', 'view'),
				'users' => array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions' => array('create', 'update'),
				'users' => array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions' => array('admin', 'delete'),
				'users' => array('admin'),
			),
			array('deny', // deny all users
				'users' => array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view', array(
			'model' => $this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model = $this -> loadModel();

		if (isset($_POST['People'])) {
			if ($this -> saveModel($model))
				$this -> redirect(array('view', 'id' => $model -> id));
		}
		$this->render('create', array(
			'model' => $model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model = $this -> loadModel($id);
		
		if (isset($_POST['Files'], $_POST['People'])) {
			if ($this -> saveModel($model))
				$this -> redirect(array('view', 'id' => $model -> id));
		}


		$this->render('update', array(
			'model' => $model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if (!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider = new CActiveDataProvider('Files', array(
			'criteria' => array(
				'condition' => 'file_type_id = :file_type_id', 
				'params' => array(':file_type_id' => Files::FILE_TYPE_PEOPLE)
			)
		));
		$this -> render('index', array('dataProvider' => $dataProvider, ));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model = new People('search');
		$model->unsetAttributes();  // clear any default values
		if (isset($_GET['People']))
			$model->attributes = $_GET['People'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return People the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id = NULL)
	{
		$model = NULL;
		if ($id === NULL) {
			$model = new Files;
		} else {
			$model = Files::model() -> findByPk($id);
			if (NULL === $model) {
				throw new CHttpException(404, 'File does not exist');
			} else {
				if (Files::FILE_TYPE_PEOPLE === $model -> file_type_id)
					throw new CHttpException(505, 'Invalid parameter');
			}
		}

		if (NULL === $model -> people)
			$model -> people = new People;

		return $model;
	}
	
	public function saveModel($model) {
		$model -> attributes = $_POST['Files'];
		$model -> file_type_id = Files::FILE_TYPE_PEOPLE;
		$model -> people -> attributes = $_POST['People'];
		$transaction = Yii::app() -> db -> beginTransaction();

		try {
			if ($model -> save()) {
				$model -> people -> file_id = $model -> id;
				if ($model -> people -> save()) {
					$transaction -> commit();
					return true;
				}
			}
		} catch (CDbException $e) {
			$transaction -> rollback();
			throw $e;
		}
		$transaction -> rollback();
		return false;
	}

	/**
	 * Performs the AJAX validation.
	 * @param People $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax'] === 'people-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

}
