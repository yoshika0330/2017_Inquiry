<?php

/*
* Smarty�p��������
*/
// Smarty��include
require_once( __DIR__ . '/vendor/smarty-3.1.30/libs/Smarty.class.php' );
// Smarty�̏����ݒ�
$smarty_obj = new Smarty();
//var_dump($smarty_obj);
$smarty_obj->setTemplateDir( __DIR__ . '/../smarty/templates/');
$smarty_obj->setCompileDir( __DIR__ . '/../smarty/templates_c/');

//�G�X�P�[�v��������on�ɂ���
$smarty_obj->escape_html = true;


