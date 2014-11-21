<?php
namespace Onionimbus\Hub\Website;

class Join extends \Onionimbus\System\Controller
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
