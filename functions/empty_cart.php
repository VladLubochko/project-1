<?php
session_start();
require_once "../includes/file.inc.php";


function empty_cart()
{
    if (isset($_POST['remove'])) {



        if ($_GET['action'] == 'remove') {

            foreach ($_SESSION['cart'] as $key => $value) {


                if ($value['product_id'] == $_GET['id']) {
                    unset($_SESSION['cart'][$key]);
                }
            }
        }
    }
    return true;
}
