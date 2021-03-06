<?php

class StudentsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column_academics';

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
				'actions'=>array('create','update','create_reg','admin_reg','loaddetails','createLogin'),
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
	 * If creation is successful, the browser will be redirected to the 'create_login' page.
	 */
	public function actionCreate()
	{
		$model=new Students;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Students']))
		{
			$model->attributes=$_POST['Students'];
			if($model->save())
                        {
                            $student_id = $model->id;
                            Yii::app()->user->setFlash('success', "Student Admitted Successfully!");
                            $this->redirect(array('users/create', 'student_id'=>$student_id, 'student_name'=>$model->name, 'parent-name'=>$model->parent_name));
                        }
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
        
        public function actionCreate_reg()
	{
            $this->layout = '//layouts/column_registration';
		$model=new Students;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Students']))
		{
			$model->attributes=$_POST['Students'];
			if($model->save())
                        {
                            Yii::app()->user->setFlash('success', "Student Created Successfully!");
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

		if(isset($_POST['Students']))
		{
			$model->attributes=$_POST['Students'];
			if($model->save())
                        {
                            Yii::app()->user->setFlash('success', "Student Details Updated Successfully!");
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
                        Yii::app()->user->setFlash('success','Student Deleted Successfully!');
                    else
                        echo "<div class='flash-success'>Student Deleted Successfully!</div>";
                }catch(CDbException $e){
                    if(!isset($_GET['ajax']))
                        Yii::app()->user->setFlash('error','Failed to Delete Student!');
                    else
                        echo "<div class='flash-error'>Failed to Delete Student!</div>"; //for ajax
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
		$dataProvider=new CActiveDataProvider('Students');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Students('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Students']))
			$model->attributes=$_GET['Students'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
        
        public function actionAdmin_reg()
	{
            $this->layout = '//layouts/column_registration';
		$model=new Students('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Students']))
			$model->attributes=$_GET['Students'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Students the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Students::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Students $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='students-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        public function actionLoaddetails()
        {
           $data=  Students::model()->findByPk($_POST['student_id']);
           echo $data->category->category_name.'||'.$data['admission_number'];
           //$data=CHtml::listData($data,'id','name');

//           echo "<option value=''>Select Student</option>";
//           foreach($data as $value=>$student_name)
//           echo CHtml::tag('option', array('value'=>$value),CHtml::encode($student_name),true);
        }
}
