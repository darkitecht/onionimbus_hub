<?php
namespace Onionimbus\Hub\Wire;

class Controller
{
    public $view;

    public function __construct()
    {
        $this->view = new \Onionimbus\Hub\Wire\Viewer(
            get_class($this)
        );
    }
}
