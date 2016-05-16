<?php
namespace Model\Entity;

class App extends \Model\Entity
{
    public static $attributes = [
        'app_id' => ['type' => 'uuid'],
        'user_id' => ['type' => 'uuid'],
        'url' => ['type' => 'url'],
        'created' => ['type' => 'datetime'],
        'updated' => ['type' => 'datetime', 'required' => false],
        'deleted' => ['type' => 'datetime', 'required' => false],
    ];

    public static $primary = 'app_id';

    public static $table = 'app';

    public static $foreign = [
        'apis' => [
            'class' => '\\Model\\Entity\\Api',
            'local' => 'api_id',
            'foreign' => 'api_id',
            'next' => [
                'class' => '\\Model\\Entity\\AppApi',
                'local' => 'app_id',
                'foreign' => 'app_id',
            ]
        ]
    ];
}
