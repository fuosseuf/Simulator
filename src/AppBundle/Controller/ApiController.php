<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Projet;
use AppBundle\Service\Simulator;

class ApiController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $projet = new Projet();
        $projet->setPrixVente(100000);
        $projet->setSurface(50);
        $projet->setSurfaceARenover(20);
        $projet->setSurfaceHabitable(50);
        $projet->setPrixMeubles(3500);
        $projet->setApport(100);
        $projet->setTypeRenovation(1);
        $projet->setType("1");
        $projet->setDureeCredit(240);
        $projet->setTauxCredit(4);
        
        $simulator = new Simulator(1, 1, 1);
        
        $simulator = $this->get('simulator');
        $simulator->setProjet($projet);
        return $this->render('default/index.html.twig', [
            'apport' => $projet->getApport(),
            'prix_achat' => $projet->getPrixVente(),
            'prix_meubles' => $projet->getPrixMeubles(),
            'frais_notaire' => $simulator->getEstimationFraisNotaire(),
            'montant_travaux' => $simulator->getEstimationPrixTravaux(),
            'emprunt' => $simulator->getMontantEmprunt(),

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
