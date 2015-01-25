<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/menu.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <script type="text/javascript">

        function MM_swapImgRestore() { //v3.0
          var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
        }
        function MM_preloadImages() { //v3.0
          var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
            var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
            if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
        }

        function MM_findObj(n, d) { //v4.01
          var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
            d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
          if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
          for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
          if(!x && d.getElementById) x=d.getElementById(n); return x;
        }

        function MM_swapImage() { //v3.0
          var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
           if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
        }
        </script>
</head>

<body>


	<div class="login-form1">
	<!--HEADER-->
  <div class="header1"><!-- Start css3menu.com BODY section -->
  <br/>
  <div>
  <div class="logo">
<img src="images/iamt.png" />
</div>
<div class="welcome">
<img src="images/user.png" /><br />
<span>Welcome Admin</span>
<?php echo CHtml::link('<img src="images/logout.png" alt="Logout" name="img" width="20" height="20" border="0" id="img" title="Logout"/>',array('site/logout'), $htmlOptions=array ('onmouseout'=>'MM_swapImgRestore()', 'onmouseover'=>'MM_swapImage("img","","images/logoutup.jpg",1)')); ?>
</div>
</div>

<br />

	<div class="menu">

<ul id="css3menu12" class="topmenu">

	<li class="topfirst"><a href="#" style="height:21px;line-height:21px;"><span><img src="images/justice.png" alt=""/>Fees</span></a>

	<ul>

		<li class="subfirst"><a href="#"><span>Create Fees</span></a>

		<ul>

			<li class="subfirst"><?php echo CHtml::link('Create Category',array('feesCategory/admin'), $htmlOptions=array ('style'=>'height:21px; line-height:21px;')); ?></li>

			<li><?php echo CHtml::link('Create Discount',array('feesDiscount/admin'), $htmlOptions=array ('style'=>'height:21px; line-height:21px;')); ?></li>

			<li><?php echo CHtml::link('Create Fine',array('fine/admin'), $htmlOptions=array ('style'=>'height:21px; line-height:21px;')); ?></li>

		</ul></li>

		<li><?php echo CHtml::link('Schedule Fee Collection',array('feesCollection/create'), $htmlOptions=array ('style'=>'height:21px; line-height:21px;')); ?>

		</li>

		<li><?php echo CHtml::link('Pay Fee',array('feesPayment/create'), $htmlOptions=array ('style'=>'height:21px; line-height:21px;')); ?>

		</li>

		<li><a href="#">Fees Structure</a></li>

		<li><a href="#">Fees Defaulters</a></li>

		<li><a href="#"><span>Fees Refund</span></a>

		<ul>

			<li class="subfirst"><a href="#">View refunds</a></li>

			<li><a href="#">Create refund rule</a></li>

			<li><a href="#">Apply refund</a></li>

		</ul></li>

		

	</ul></li>

	<li class="topmenu"><?php echo CHtml::link('<img src="images/grid.png" />Category',array('financeCategory/admin'), $htmlOptions=array ('style'=>'height:21px; line-height:21px;')); ?></li>

	<li class="topmenu"><a href="#" style="height:21px;line-height:21px;"><span><img src="images/transfer.png" alt=""/>Transactions</span></a>

	<ul>

		<li class="subfirst"><?php echo CHtml::link('Add expense',array('expense/create'), $htmlOptions=array ('style'=>'height:21px; line-height:21px;')); ?></li>

		<li><?php echo CHtml::link('Add income',array('income/create'), $htmlOptions=array ('style'=>'height:21px; line-height:21px;')); ?></li>

		<!--<li><a href="revert.html">Reverted transactions</a></li>-->

	</ul></li>

	<li class="topmenu"><?php echo CHtml::link('<img src="images/sun.png" alt=""/>Donations',array('donations/create'), $htmlOptions=array ('style'=>'height:21px; line-height:21px;')); ?></li>

	<li class="topmenu"><a href="#" style="height:21px;line-height:21px;"><span><img src="images/popup.png" alt=""/>Payslip</span></a>

	<ul>

		<li class="subfirst"><a href="#">Create Payslip</a></li>

		<li><a href="#">View Payslip</a></li>
        
        <li><a href="#">One click approve payslip</a></li>

	</ul></li>

	<li class="topmenu"><a href="#" style="height:21px;line-height:21px;"><span><img src="images/analytics.png" alt=""/>Finance Reports</span></a>

	<ul>

		<li class="subfirst"><a href="#">Report</a></li>

		<li><a href="#">Compare Transactions</a></li>

	</ul></li>

	<li class="toplast"><a href="#" style="height:21px;line-height:21px;"><span><img src="images/bars.png" alt=""/>Asset &amp; Liability</span></a>

	<ul>

		<li class="subfirst"><?php echo CHtml::link('Create Asset',array('assets/create'), $htmlOptions=array ('style'=>'height:21px; line-height:21px;')); ?></li>

		<li><?php echo CHtml::link('Create Liability',array('liabilities/create'), $htmlOptions=array ('style'=>'height:21px; line-height:21px;')); ?></li>

	</ul></li>
</ul>
</div><!-- mainmenu -->
  </div><!-- header1 -->
        </div><!-- login-form1 -->
        <div class="content1">
                
	<?php echo $content; ?>
                
        </div><!-- content1 -->
	<div class="clear"></div>

	<div id="footer">
            Powered by : <a href="http://www.geeignet.net" target="_blank">Geeignet Technologies</a>
	</div><!-- footer -->

</body>
</html>
