<?php

namespace app\Controllers;



class PageController
{

    public function view(array $params)
    {
        $message = '<pre>I am '  . __METHOD__ . '</pre>';

        foreach ($params as $paramName => $paramValue) {
            if ($paramName) {
                $message .= '<pre>Название параметра - ' . $paramName . '</pre>';
                $message .= '<pre>Значение параметра - ' . $paramValue . '</pre>';
            }
            echo $message;
        }
    }

    public function show(array $params)
    {
        $message = '<pre>I am '  . __METHOD__ . '</pre>';

        foreach ($params as $paramName => $paramValue) {
            if ($paramName) {
                $message .= '<pre>Название параметра - ' . $paramName . '</pre>';
                $message .= '<pre>Значение параметра - ' . $paramValue . '</pre>';
            }
            echo $message;
        }
    }

}