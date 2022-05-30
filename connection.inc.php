<?php
session_start();
$con=mysqli_connect("localhost","root","","store");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/admin/');
define('SITE_PATH','http://127.0.0.1/admin/');

define('INSTAMOJO_REDIRECT',SITE_PATH.'payment_complete.php');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');

define('PRODUCT_MULTIPLE_IMAGE_SERVER_PATH',SERVER_PATH.'media/product_images/');
define('PRODUCT_MULTIPLE_IMAGE_SITE_PATH',SITE_PATH.'media/product_images/');

define('BANNER_SERVER_PATH',SERVER_PATH.'media/banner/');
define('BANNER_SITE_PATH',SITE_PATH.'media/banner/');

define('INSTAMOJO_KEY','key');
define('INSTAMOJO_TOKEN','token');


define('SMTP_EMAIL','testamit57@gmail.com');
define('SMTP_PASSWORD','Test@123');



define('SMS_KEY','sms_key');

?>