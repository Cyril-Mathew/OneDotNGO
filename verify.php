<?php

require('config.php');
session_start();
$conn = mysqli_connect($server, $username, $password, $dbname);



require('razorpay-php/Razorpay.php');

use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false) {
    $api = new Api($keyId, $keySecret);

    try {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    } catch (SignatureVerificationError $e) {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}


if ($success === true) {
    $razorpay_order_id = $_SESSION['razorpay_order_id'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    $email = $_SESSION['email'];
    $name = $_SESSION['name'];
    $mobile = $_SESSION['mobile'];
    $amount = $_SESSION['amount'];

    // $query = "INSERT INTO `donation` (`name`, `email`, `amount`, `mobile`, `order_id`, `razorpay_payment_id`, `status`) VALUES ( '$name', '$email', '$amount', '$mobile', '$razorpay_order_id', '$razorpay_payment_id', 'success')";
    // mysqli_query($conn, $query);


    $query = "INSERT INTO `donation` (`name`, `email`, `amount`, `mobile`, `order_id`, `razorpay_payment_id`, `status`) VALUES ( '$name', '$email', '$amount', '$mobile', '$razorpay_order_id', '$razorpay_payment_id', 'success')";

    $run = mysqli_query($conn, $query) or die(mysqli_error($conn));

    if ($run) {
        echo ("<script LANGUAGE='JavaScript'>
                window.alert('Donation Successful');
                window.location.href='thankyou.php';
                </script>");
    } else {
        echo ("<script LANGUAGE='JavaScript'>
                window.alert('Unknown Error');
                window.location.href='form.html';
                </script>");
    }
} else {
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
