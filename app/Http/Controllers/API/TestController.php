<?php

namespace TestApp1\Http\Controllers\API;

use Illuminate\Http\Request;
use TestApp1\Http\Controllers\Controller;

class TestController extends Controller
{
    private static $respvar1 = array(
        'var1' => '123',
        'test' => '321',
        'miniarray' => [
            '1' => '111',
            '2' => '222',
            '3' => '333',                
        ],
        'var-ar' => [
            '123',
            '321',
            'miniarray' => array(
                '1' => '111',
                '2' => '222',
                '3' => '333',                
            ),
        ]
    );    

    public function __invoke()
    {
        return response(self::$respvar1, 200);
        
    }
}