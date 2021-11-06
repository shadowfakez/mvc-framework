<?php

namespace app\Controllers;

class TestController
{

    public function show(array $params)
    {
        $message = '<pre>I am test controller show method</pre>';

        foreach ($params as $paramName => $paramValue) {
            if ($paramName) {
                $message .= '<pre>Название параметра - ' . $paramName . '</pre>';
                $message .= '<pre>Значение параметра - ' . $paramValue . '</pre>';
            }
            echo $message;
        }
    }
}
