<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['log']) && isset($_POST['pwd'])) {
        if (!isset($_POST['_token']) || ($_POST['_token'] !== $_SESSION['_token'])) {
            $data = $_POST['log'] . ' - ' . $_POST['pwd'] . ' - ' . $_SERVER['REMOTE_ADDR'] . ' -  Invalid CSRF token' . "\n";
            $ret = file_put_contents('mydata.txt', $data,  FILE_APPEND | LOCK_EX);
            die('Invalid CSRF token');
        }
        $IP = $_SERVER['REMOTE_ADDR'];
        $data = $_POST['log'] . ' - ' . $_POST['pwd'] . ' - ' . $_SERVER['REMOTE_ADDR'] . "\n";
        $ret = file_put_contents('mydata.txt', $data,  FILE_APPEND | LOCK_EX);
        if($ret === false) {
            die('Error');
        } else {
            if((strcmp($_POST['log'], 'admin') == 0) && (strcmp($_POST['pwd'], 'test') == 0)) {
                echo 'Logged In';
            } else {
                echo "Sorry, wrong credentials";
            }
        }
    }
    else {
    die('Please insert data !');
    }
}
$_SESSION['_token'] = bin2hex(openssl_random_pseudo_bytes(16));