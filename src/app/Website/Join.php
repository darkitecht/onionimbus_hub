<?php
namespace Onionimbus\Hub\Website;

class Join extends \Onionimbus\Hub\Wire\Controller
{
    public function index()
    {
        if (!empty($_POST)) {
            return $this->_process();
        }
    }

    protected function _process()
    {

    }
}
