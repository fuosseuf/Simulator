<?php

namespace AppBundle\Controller\web;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Projet;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Form\ProjetType;

class ProjetController extends Controller {

    
    
    /**
     * @Route("/web/projets")
     * @Method("GET")
     */
     public function getProjetsAction()
     {
         return new Response("parfait !! ");
     }
    
    
    /**
     * @Route("/", name="homepage")
     * @Method("GET")
     */
    public function indexAction(Request $request) {
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
        $projet->setLoyerMensuel(360);
        $projet->setNombreMoisPlein(11);
        $projet->setChargesCopropriete(200);
        $projet->setChargesEntretien(300);
        $projet->setTaxeFonciere(598);
        $projet->setFraisGestion(330);

        $simulator = $this->get('simulator');
        $simulator->setProjet($projet);
        return $this->render('default/index.html.twig', [
                    'apport' => $projet->getApport(),
                    'prix_achat' => $projet->getPrixVente(),
                    'prix_meubles' => $projet->getPrixMeubles(),
                    'frais_notaire' => $simulator->getEstimationFraisNotaire(),
                    'montant_travaux' => $simulator->getEstimationPrixTravaux(),
                    'emprunt' => $simulator->getMontantEmprunt(),
                    'duree' => $projet->getDureeCredit(),
                    'taux' => $projet->getTauxCredit(),
                    'taux_assurance' => $simulator->getPercent_assu_credit(),
                    'credit_sa' => $simulator->getEstimationCreditHorsAssurance(),
                    'credit_aa' => $simulator->getEstimationCreditAvecAssurance(),
                    'loyer_brut' => $projet->getLoyerMensuel(),
                    'loyer_m2' => $simulator->getLoyerM2(),
                    'nombre_loyers' => $projet->getNombreMoisPlein(),
                    'loyer_net' => $simulator->getLoyerNet(),
                    'recettes' => $simulator->getRecettes(),
                    'charges_copro' => $projet->getChargesCopropriete(),
                    'frais_gestion' => $projet->getFraisGestion(),
                    'frais_renovation' => $projet->getChargesEntretien(),
                    'taxe_fonciere' => $projet->getTaxeFonciere(),
                    'assu_grl' => $simulator->getAssuranceGRL(),
                    'assu_pno' => $simulator->getAssurancePNO(),
                    'credit_annuel' => $simulator->getCreditAnnuel(),
                    'charges' => $simulator->getCharges(),
                    'ammortissement_bien' => $simulator->getAmmortissemntBien(),
                    'ammortissement_meubles' => $simulator->getAmmortissemnt_meuble(),
                    'interet_emprunt' => $simulator->getInteretEmprunt(),
                    'charges_imposables' => $simulator->getChargesImposbles(),
                    'abattement' => $simulator->getAbattement(),
                    'total_charges_bic' => $simulator->getAbattement(),
                    'total_charges_reel' => $simulator->getTotalChargesReel(),
                    'resultat_bic' => $simulator->getAbattement(),
                    'resultat_reel' => $simulator->getResultatReel(),
                    'impot_bic' => $simulator->getImpotBIC(),
                    'impot_reel' => $simulator->getImpotReel(),
        ]);
    }
}
