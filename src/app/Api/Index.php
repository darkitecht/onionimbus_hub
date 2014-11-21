<?php
namespace Onionimbus\Hub\Api;

class Index extends \Onionimbus\System\Controller
{
    public function index()
    {
        $this->view->render([
            'report' => []
        ]);
    }
}
