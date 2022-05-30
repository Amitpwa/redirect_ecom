<?php

ob_start();
require('top.php');
if($_POST['userid'] && $_POST['productid']){
echo $_POST['productid'];
}else{
echo "both_values_required";
}