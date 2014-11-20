<?php
namespace Onionimbus\Hub\Website;

class Index extends \Onionimbus\Hub\Wire\Controller
{
    public function index()
    {
        $this->view->render();
    }
}
