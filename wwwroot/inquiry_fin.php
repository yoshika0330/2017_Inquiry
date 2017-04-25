<?php

// 入力された情報を取得
/*
$email = (string)@$_POST['email'];
$email = (string)filter_input(INPUT_POST, 'email');
*/


$params = array('email','name','birthday','body');
$input_date = array();
foreach($params as $p){
   $input_date[$p] = (string)@$_POST[$p];
}

var_dump($input_date);

// validate(情報は正しい？)
$error_detail = array(); // エラー情報格納用変数

// 必須チェック
$must_params = array('email', 'body');
foreach($must_params as $p){
    if ('' === $input_date[$p]){
       // エラー処理
       $error_detail["error_must_{$p}"] = true;
    }
}

// 型チェック:email
// RFC非準拠のメアドはさよなら
if (false === filter_var($input_date['email'], FILTER_VALIDATE_EMAIL)){
    // 	エラー処理
    $error_detail["error_format_email"] = true;
}

// 型チェック:日付
if ('' !== $input_date['birthday']){
    if (false === strtotime($input_date['birthday'])){
        // エラー処理
        $error_detail["error_format_birthday"] = true;
    }
}


// エラー判定
if (array() != $error_detail){
var_dump($error_detail);
  echo 'エラー出現';
  exit;
}
// ダミー
echo 'データのvalidateはOKでした';


// 入力された情報をDBにinsert

// 「ありがとう」Pageの出力

?>