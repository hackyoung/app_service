<?php
namespace Controller;

class Index extends \Leno\Controller
{
    public function index($id)
    {
        try {
            (new \Leno\Validator(['type' => 'uuid'], 'appid'))->check($id);
        } catch(\Exception $e) {
            throw new \Leno\Http\Exception(400, $e->getMessage());
        }
        try {
            $app = \Model\Entity\App::findOrFail($id);
        } catch(\Exception $e) {
            throw new \Leno\Http\Exception(422);
        }
        return json_encode($app);
    }
}
