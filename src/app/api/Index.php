<?php
namespace \Onionimbus\Hub\Api;

class Index extends \Onionimbus\Common\ApiController
{
    public function index()
    {
        $this->view->render();
    }
}
