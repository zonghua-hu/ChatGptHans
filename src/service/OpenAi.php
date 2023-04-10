<?php

namespace service;

class OpenAi
{

    public function __construct(string $apiKey)
    {
        if (empty($apiKey)) {
            throw new \Exception("invalid api key");
        }
        $httpRequest = new \HttpRequest();
        $httpRequest->setHeaders([
            ''
        ]);


    }

}