<?php
require_once "vendor/autoload.php";
 
use Omnipay\Omnipay;
 
define('CLIENT_ID', 'AWtERYPTeU4L55MJw0xYRrGhmZkBZeh9lrjcKLjbTnwAUKtEegnH9Ets_WufiDlRiz4vT0Cmz-xhVRTN');
define('CLIENT_SECRET', 'EAnOrE99-_UrpSc_5VQcNePXuZ10RdaIg32hbsGXS4wYCmcqDjRg4T7eWWUjCz6FFMSfrQCp7GBtvJyg');
 
define('PAYPAL_RETURN_URL', 'http://localhost/paypal/success.php');
define('PAYPAL_CANCEL_URL', 'http://localhost/paypal/cancel.php');
define('PAYPAL_CURRENCY', 'USD'); // set your currency here
 
// Connect with the database
$db = new mysqli('localhost', 'root', '', 'test'); 
 
if ($db->connect_errno) {
    die("Connect failed: ". $db->connect_error);
}
 
$gateway = Omnipay::create('PayPal_Rest');
$gateway->setClientId(CLIENT_ID);
$gateway->setSecret(CLIENT_SECRET);
$gateway->setTestMode(true); //set it to 'false' when go live