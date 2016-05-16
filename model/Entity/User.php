<?php
namespace \Model\Entity;

class User extends \Model\Entity
{
    public static $attributes = [
        'user_id' => ['type' => 'uuid'],
        'compony_name' => ['type' => 'string', 'extra' => [
            'max_length' => 32,
        ]],
        'compony_description' => ['type' => 'string', 'extra' => [
            'max_length' => 128,
        ]],
        'compony_url' => ['type' => 'url', 'required' => false],
        'charge_person_name' => ['type' => 'string', 'extra' => [
            'max_length' => 32,
        ]],
        'charge_person_id' => ['type' => 'string', 'extra' => [
            'max_length' => 32,
        ]],
        'password' => ['type' => 'string', 'extra' => [
            'min_length' => 6, 'max_length' => 32
        ]],
        'created' => ['type' => 'datetime'],
        'updated' => ['type' => 'datetime', 'required' => false],
        'deleted' => ['type' => 'datetime', 'required' => false],
    ];

    public static $table = 'user';

    public static $primary = 'user_id';

    public static $foreign = [
        'apis' => [
            'class' => '\\Model\\Entity\\Api',
            'local' => 'api_id',
            'foreign' => 'api_id',
            'next' => [
                'class' => '\\Model\Entity\\UserApi',
                'local' => 'user_id',
                'foreign' => 'user_id',
            ]
        ],
        'apps' => [
            'class' => '\\Model\\Entity\\App',
            'local' => 'user_id',
            'foreigin' => 'user_id',
        ]
    ];
}
