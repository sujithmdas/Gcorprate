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
                var i, x, a = document.MM_sr;
                for (i = 0; a && i < a.length && (x = a[i]) && x.oSrc; i++)
                    x.src = x.oSrc;
            }
            function MM_preloadImages() { //v3.0
                var d = document;
                if (d.images) {
                    if (!d.MM_p)
                        d.MM_p = new Array();
                    var i, j = d.MM_p.length, a = MM_preloadImages.arguments;
                    for (i = 0; i < a.length; i++)
                        if (a[i].indexOf("#") != 0) {
                            d.MM_p[j] = new Image;
                            d.MM_p[j++].src = a[i];
                        }
                }
            }

            function MM_findObj(n, d) { //v4.01
                var p, i, x;
                if (!d)
                    d = document;
                if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
                    d = parent.frames[n.substring(p + 1)].document;
                    n = n.substring(0, p);
                }
                if (!(x = d[n]) && d.all)
                    x = d.all[n];
                for (i = 0; !x && i < d.forms.length; i++)
                    x = d.forms[i][n];
                for (i = 0; !x && d.layers && i < d.layers.length; i++)
                    x = MM_findObj(n, d.layers[i].document);
                if (!x && d.getElementById)
                    x = d.getElementById(n);
                return x;
            }

            function MM_swapImage() { //v3.0
                var i, j = 0, x, a = MM_swapImage.arguments;
                document.MM_sr = new Array;
                for (i = 0; i < (a.length - 2); i += 3)
                    if ((x = MM_findObj(a[i])) != null) {
                        document.MM_sr[j++] = x;
                        if (!x.oSrc)
                            x.oSrc = x.src;
                        x.src = a[i + 2];
                    }
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
<?php echo CHtml::link('<img src="images/iamt.png" alt="IAMT logo" title="Home" />', array('site/index')); ?>
                    </div>
                    <div class="welcome">
                        <img src="images/user.png" /><br />
                        <span>Welcome Admin</span>
<?php echo CHtml::link('<img src="images/logout.png" alt="Logout" name="img" width="20" height="20" border="0" id="img" title="Logout"/>', array('site/logout'), $htmlOptions = array('onmouseout' => 'MM_swapImgRestore()', 'onmouseover' => 'MM_swapImage("img","","images/logoutup.jpg",1)')); ?>
                    </div>
                </div>

                <br />

                <div class="menu">

                    <ul id="css3menu11" class="topmenu">

                        <li class="topfirst"><?php echo CHtml::link('<img src="images/users1.png" alt=""/>Student Admission', array('students/create_reg'), $htmlOptions = array('style' => 'height:21px; line-height:21px;')); ?></li>

                        <li class="topmenu"><?php echo CHtml::link('<img src="images/users1.png" alt=""/>Students List', array('students/admin_reg'), $htmlOptions = array('style' => 'height:21px; line-height:21px;')); ?></li>

                        <li class="topmenu"><?php echo CHtml::link('<img src="images/justice.png" alt=""/>Pay Fees', array('feesPayment/create_reg'), $htmlOptions = array('style' => 'height:21px; line-height:21px;')); ?></li>

                        <li class="toplast"><?php echo CHtml::link('<img src="images/justice.png" alt=""/>Fees Payment List', array('feesPayment/admin_reg'), $htmlOptions = array('style' => 'height:21px; line-height:21px;')); ?></li>



                    </ul>
                </div><!-- mainmenu -->
            </div><!-- header1 -->
        </div><!-- login-form1 -->
        <div class="content1">

            <div id="page-wrap">
<?php echo $content; ?>
            </div>
        </div><!-- content1 -->
        <div class="clear"></div>

        <div id="footer">
            Powered by : <a href="http://www.geeignet.net" target="_blank">Geeignet Technologies</a>
        </div><!-- footer -->



    </body>
</html>
