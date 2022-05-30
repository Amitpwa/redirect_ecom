<?php
require('connection.inc.php');
require('functions.inc.php');
if ($_POST['userid'] && $_POST['productid']) {
    $user_id = get_safe_value($con, $_POST['userid']);
    $product_id = get_safe_value($con, $_POST['productid']);

    $res = mysqli_query($con, "INSERT INTO ext_click (user_id, product_id) VALUES ('$user_id','$product_id')");
    if ($res) {
        echo "yes";
    } else {
        echo "no";
    }
} else {
    echo "both_values_required";
}
