<?php

class FeesPaymentController extends Controller
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
				'actions'=>array('create','update','create_reg','admin_reg'),
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
		$model=new FeesPayment;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['FeesPayment']))
		{
			$model->attributes=$_POST['FeesPayment'];
                        //http://sms.geeignet.net/httpapi/smsapi?uname={Username}&password={Password}&sender={Sender id}&receiver={Destination numbers}&group={group Ids}&route={Route id}&msgtype={ Message type}&sms={SMS content}
//                        	
                         
			if($model->save())
                        {
                            
                            Yii::app()->clientScript->registerScript('process', "
                        
                        $(function () {
                            $.ajax({
                                url:'http://sms.geeignet.net/httpapi/smsapi?uname=geeignet&password=chinnuakhil&sender=IAMTAC&receiver=9746278921&group=&route=T1&msgtype=1&sms=Test SMS1',
                                type:'POST',
                                data:'proc=process',   
                                success:function(result){
                                if($.trim(result) == 'sucsess')
                                alert(result);
                                else
                                alert('Server Busy. Please try again after some time');
                                },
                                
                                
                                });
                                
                            });
                        ");
                            Yii::app()->user->setFlash('success', "Fees Payment Successfully!");
                            $this->redirect(array('admin'));
                        }
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
        
        public function actionCreate_reg()
	{
            $this->layout = '//layouts/column_registration';
		$model=new FeesPayment;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['FeesPayment']))
		{
			$model->attributes=$_POST['FeesPayment'];
                        //http://sms.geeignet.net/httpapi/smsapi?uname={Username}&password={Password}&sender={Sender id}&receiver={Destination numbers}&group={group Ids}&route={Route id}&msgtype={ Message type}&sms={SMS content}
//                        	
                         
			if($model->save())
                        {
                            
                            Yii::app()->clientScript->registerScript('process', "
                        
                        $(function () {
                            $.ajax({
                                url:'http://sms.geeignet.net/httpapi/smsapi?uname=geeignet&password=chinnuakhil&sender=IAMTAC&receiver=9746278921&group=&route=T1&msgtype=1&sms=Test SMS1',
                                type:'POST',
                                data:'proc=process',   
                                success:function(result){
                                if($.trim(result) == 'sucsess')
                                alert(result);
                                else
                                alert('Server Busy. Please try again after some time');
                                },
                                
                                
                                });
                                
                            });
                        ");
                            Yii::app()->user->setFlash('success', "Fees Payment Successfully!");
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

		if(isset($_POST['FeesPayment']))
		{
			$model->attributes=$_POST['FeesPayment'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
                
		$dataProvider=new CActiveDataProvider('FeesPayment');
                $html2pdf = Yii::app()->ePdf->HTML2PDF();
                $html2pdf->WriteHTML($this->renderPartial('index', array('dataProvider'=>$dataProvider,), true));
                $html2pdf->Output();
//		$this->render('index',array(
//			'dataProvider'=>$dataProvider,
//		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new FeesPayment('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['FeesPayment']))
			$model->attributes=$_GET['FeesPayment'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
        
        public function actionAdmin_reg()
	{
            $this->layout = '//layouts/column_registration';
		$model=new FeesPayment('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['FeesPayment']))
			$model->attributes=$_GET['FeesPayment'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return FeesPayment the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=FeesPayment::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param FeesPayment $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='fees-payment-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
