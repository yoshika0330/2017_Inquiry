<?php

require_once( __DIR__ . '/../init.php');
require_once( __DIR__ . '/../dbh.php');


// アクセス制御:ログインしていなければ入れない
if (false === isset($_SESSION['admin_auth']) ) {
    // XXX エラーメッセージ
    header('Location: ./index.php');
    exit;
}