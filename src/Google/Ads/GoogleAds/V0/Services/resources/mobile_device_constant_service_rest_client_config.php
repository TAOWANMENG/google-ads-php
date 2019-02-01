<?php

return [
    'interfaces' => [
        'google.ads.googleads.v0.services.MobileDeviceConstantService' => [
            'GetMobileDeviceConstant' => [
                'method' => 'get',
                'uriTemplate' => '/v0/{resource_name=mobileDeviceConstants/*}',
                'placeholders' => [
                    'resource_name' => [
                        'getters' => [
                            'getResourceName',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
