<?php

class EmployeeCategoryController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column_hr';

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
	public function actionCreate()
	{
		$model=new EmployeeCategory;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['EmployeeCategory']))
		{
			$model->attributes=$_POST['EmployeeCategory'];
			if($model->save())
                        {
                            Yii::app()->user->setFlash('success', "Employee Category Created Successfully!");
                            $this->redirect(array('admin'));
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

		if(isset($_POST['EmployeeCategory']))
		{
			$model->attributes=$_POST['EmployeeCategory'];
			if($model->save())
                        {
                            Yii::app()->user->setFlash('success', "Employee Category Updated Successfully!");
                            $this->redirect(array('admin'));
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
		try{
                    $this->loadModel($id)->delete();
                    if(!isset($_GET['ajax']))
                        Yii::app()->user->setFlash('success','Employee Category Inactivated Successfully!');
                    else
                        echo "<div class='flash-success'>Employee Category Inactivated Successfully!</div>";
                }catch(CDbException $e){
                    if(!isset($_GET['ajax']))
                        Yii::app()->user->setFlash('error','Failed to Inactivate Employee Category!');
                    else
                        echo "<div class='flash-error'>Failed to Inactivate Employee Category!</div>"; //for ajax
                }

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('EmployeeCategory');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new EmployeeCategory('search');
		$model->unsetAttributes();  // clear any default values
                
                if(isset($_POST['EmployeeCategory']))
		{
			$model->attributes=$_POST['EmployeeCategory'];
			if($model->save())
                        
                            Yii::app()->user->setFlash('success', "Employee Category Created Successfully!");
                        else
                            Yii::app()->user->setFlash('error', "Failed to Create Employee Category!");
                            
                        $this->redirect(array('admin'));
                        
		}
                
		if(isset($_GET['EmployeeCategory']))
			$model->attributes=$_GET['EmployeeCategory'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return EmployeeCategory the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=EmployeeCategory::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param EmployeeCategory $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='employee-category-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
