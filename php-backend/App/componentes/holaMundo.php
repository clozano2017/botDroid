<?php
$app->get('/holaMundo', function () use ($app) {

    $helper = new helper();
    $data = [
        'status'=>'exitoso',
        'code' => '000',
        'msg' => 'Bienvenido en es un honor <br>tenerlo con nosotros '
    ];
    echo $helper->checkCode($data);
});

