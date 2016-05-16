<?php
namespace Model\Entity;

class AppApi extends \Model\Entity
{
    public static $attributes = [
        'app_id' => ['type' => 'uuid'],
        'api_id' => ['type' => 'uuid'],
    ];
}
