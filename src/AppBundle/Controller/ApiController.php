<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ApiController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
     * @Route("/lucky/number", name="lucky_number")
     */
    public function luckyNumberAction() {
        
        $nb = mt_rand(0, 100);
        return new \Symfony\Component\HttpFoundation\Response("<html><body><h1>Random Number</h1> <p>$nb</p></body></html>");
        
    }
    
}
