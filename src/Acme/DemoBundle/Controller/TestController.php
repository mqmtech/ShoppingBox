<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;

class TestController
{
    private $router;
    
    public function __construct($router)
    {
        $this->router = $router;
    }
    
    public function indexAction()
    {
        return new RedirectResponse($this->router->generate('_demo'));
    }
}
