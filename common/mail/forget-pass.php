<?php
    use yii\helpers\Url;
?>
<p>尊敬的<?php echo $admin_name; ?>，您好：</p>

<p>您的找回密码链接如下：</p>

<?php

$url = '';
    //$url = Yii::$app->urlManager->createAbsoluteUrl(['login/reset-pass', 'time' => $time, 'admin_name' => $admin_name, 'token' => $token]);
//    $url = Url::to(['login/reset-pass', 'time' => $time, 'admin_name' => $admin_name, 'token' => $token]);
?>
<p><a href="<?php echo $url; ?>"><?php echo $url; ?></a></p>

<p>该链接10分钟内有效，请勿传递给别人！</p>

<p>该邮件为系统自动发送，请勿回复！</p>