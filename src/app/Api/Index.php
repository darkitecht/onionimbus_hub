<?php
namespace Onionimbus\Hub\Api;

class Index extends \Onionimbus\Hub\Wire\Controller
{
    public function index()
    {
        $this->view->render([
            'report' => []
        ]);
    }
}
