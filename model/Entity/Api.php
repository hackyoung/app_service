<?php
namespace Model\Entity;

class Api extends \Model\Entity
{
    public static $attributes = [
        'api_id' => ['type' => 'uuid'],
        'label' => ['type' => 'string', 'extra' => [
            'max_length' => 32,
        ]],
        'url' => ['type' => 'url'],
        'description' => ['type' => 'string', 'extra' => [
            'max_length' => 128,
        ]],
        'created' => ['type' => 'datetime'],
        'updated' => ['type' => 'datetime', 'required' => false],
        'deleted' => ['type' => 'datetime', 'required' => false],
    ];

    public static $table = 'api';

    public static $primary = 'api_id';
}
