<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PricesController extends Controller
{
    /**
      * @Route("/prices")
     */
    public function PricesAction(Request $request)
    {
        return $this->render('default/prices.html.twig');
    }
}
