<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;

class CalculatorController extends Controller
{
    public function indexAction($age)
    {
        $currentYear = date('Y');
        return new Response('<html><body>Año actual: ' . $currentYear . '<br/>Año de nacimiento: ' . ($currentYear - $age) . '</body></html>');
    }
}
