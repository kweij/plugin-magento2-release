<?php

namespace DHLParcel\Shipping\Model\Service;

use DHLParcel\Shipping\Model\Api\Connector;

class Authentication
{

    protected $connector;

    public function __construct(
        Connector $connector
    ) {
        $this->connector = $connector;
    }

    public function test($userId, $key)
    {
        return $this->connector->testAuthenticate($userId, $key);
    }
}
