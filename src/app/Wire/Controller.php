<?php
namespace Onionimbus\Hub\Wire;

class Controller
{
    public $view;

    public function __construct(\Twig_Environment $engine = null)
    {
        $fqn = explode('\\', \get_class($this));
        do {
            $name = \array_pop($fqn);
        } (while (!empty($fqn) && empty($name));

        $this->view = new \Onionimbus\Hub\Wire\View(
            $name,
            $engine
        );
    }
}
