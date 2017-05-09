<?php

//　ヘッダを出力するのでバッファリング
ob_start();


//　少し待つ
sleep(5);

//　移動させる
header('Location: http://google.com');


