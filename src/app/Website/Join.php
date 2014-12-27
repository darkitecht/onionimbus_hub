<?php
namespace Onionimbus\Hub\Website;

class Join extends \Onionimbus\System\Controller
{
    public function index()
    {
        if (!empty($_POST)) {
            return $this->_process();
        }
        return $this->view->render('join.twig');
    }
    
    public function uniqueCheck()
    {
        
    }

    protected function _process()
    {

    }
}
