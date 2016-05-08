<?php
namespace Model\Service\App

class Verify extends \Leno\Service
{
    protected $appid = '';

    public function __construct($appid)
    {
        $this->appid = $appid;
    }

    public function execute()
    {
        return ['leno.young', 'user.leno.young'];
    }
}
