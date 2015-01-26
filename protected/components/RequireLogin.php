<?php

  /* 
 * Web Application By Sujith M Das (sujithmdas.com).
 */

class RequireLogin extends CBehavior
{
    public function attach($owner)
    {
        $owner->attachEventHandler('onBeginRequest', array($this, 'handleBeginRequest'));
    }
    
    public function handleBeginRequest($event)
    {
        if(isset($_GET['r']))
        {
            if (Yii::app()->user->isGuest && !in_array($_GET['r'],array('site/login'))) {
                Yii::app()->user->loginRequired();
            }
        }
        else
        {
            Yii::app()->user->loginRequired();
        }
    }
}
?>