<?php
namespace Model\Entity;

class UserApi extends \Model\Entity
{
    public static $attributes = [
        'user_id' => [ 'type' => 'uuid'],
        'api_id' => ['type' => 'uuid'],
    ];
}
