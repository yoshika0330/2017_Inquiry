<?php

$raw_pass = 'password';
$pass = password_hash($raw_pass, PASSWORD_DEFAULT);

var_dump($raw_pass, $pass);

// �����p�R�[�h
$pass_md5 = md5($raw_pass);
$pass_sha1 = sha1($raw_pass);
var_dump($pass_md5, $pass_sha1);
