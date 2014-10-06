<?php

class TemaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($id)
	{
		$model=new Tema;

		$model->cod_area = $id;
		$model->cod_usuario = Yii::app()->user->getId();

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Tema']['tags']))
			$model->tags = $_POST['Tema']['tags'];
			

		if(isset($_POST['Tema']))
		{
			$model->attributes=$_POST['Tema'];
			if($model->save()){

				$tags = explode(',', $model->tags);

				foreach ($tags as $t) {
					$tag = new Tag();
					$tag->cod_tema = $model->cod_tema;
					$tag->nome = $t;
					$tag->save();
				}

				$this->redirect(array('view','id'=>$model->cod_tema));
			}
				
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		$model->tags = json_encode(array_map(function($t){
			return array(
				'id'=>$t->cod_tag,
				'name'=>$t->nome,
				'readonly'=>(count($t->projetos) > 0),
				'remove'=>true,
			);
		}, $model->tags));


		if(isset($_POST['Tema']['tags']))
			$model->tags = $_POST['Tema']['tags'];
			


		if(isset($_POST['Tema']))
		{
			$model->attributes=$_POST['Tema'];
			if($model->save()){
				Tag::model()->deleteAll('cod_tema = '.$model->cod_tema);
				$tags = explode(',', $model->tags);

				foreach ($tags as $t) {
					$tag = new Tag();
					$tag->cod_tema = $model->cod_tema;
					$tag->nome = $t;
					$tag->save();
				}

				$this->redirect(array('view','id'=>$model->cod_tema));
			}
		}

		$this->render('update',array(
			'model'=>$model,
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
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Tema');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Tema('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Tema']))
			$model->attributes=$_GET['Tema'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionMyProjects()
	{
		//TODO mostrar só projetos do usuário professor atual




	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Tema::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='tema-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
