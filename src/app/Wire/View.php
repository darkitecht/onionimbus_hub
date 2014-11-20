<?php
namespace Onionimbus\Hub\Wire;

class View
{
    private $default_template = '';

    public function __construct($default_template = '')
    {
        if (isset(default_template)) {
            $this->default_template = $default_template;
        }
    }

    public function render($template, $params)
    {

    }
}
