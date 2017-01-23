<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Projet;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use AppBundle\Form\ProjetType;

class ApiController extends Controller {

    /**
     * @Route("/", name="homepage")
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

    /**
     * @Rest\View()
     * @Rest\Get("/projets")
     */
    public function getProjetsAction() {
        return $this->getDoctrine()->getEntityManager()->getRepository('AppBundle:Projet')->findAll();
    }

    /**
     * @Rest\View()
     * @Rest\Get("/projets/{projet_id}")
     */
    public function getProjetAction($projet_id) {

        $projet = $this->getDoctrine()->getEntityManager()->getRepository('AppBundle:Projet')->find($projet_id);

        if (empty($projet))
            return View::create(['message' => 'Ressource not found'], \Symfony\Component\HttpFoundation\Response::HTTP_NOT_FOUND);
        return $projet;
    }

    /**
     * @Rest\View()
     * @Rest\Put("/projets/{projet_id}")
     */
    public function putProjetAction($projet_id, Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $projet = $em->getRepository('AppBundle:Projet')->find($projet_id);

        if (empty($projet))
            return View::create(['message' => 'Ressource not found'], \Symfony\Component\HttpFoundation\Response::HTTP_NOT_FOUND);
        $form = $this->createForm(ProjetType::class, $projet);
        $form->submit($request->request->all());

        if ($form->isValid()) {
            $em->merge($projet);
            $em->flush();
            return $projet;
        }
        return $form;
    }

    /**
     * @Rest\View()
     * @Rest\Patch("/projets/{projet_id}")
     */
    public function patchProjetAction($projet_id, Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $projet = $em->getRepository('AppBundle:Projet')->find($projet_id);

        if (empty($projet))
            return View::create(['message' => 'Ressource not found'], \Symfony\Component\HttpFoundation\Response::HTTP_NOT_FOUND);
        $form = $this->createForm(ProjetType::class, $projet);
        $form->submit($request->request->all(), FALSE);

        if ($form->isValid()) {
            $em->merge($projet);
            $em->flush();
            return $projet;
        }
        return $form;
    }

    /**
     * @Rest\View()
     * @Rest\Post("/projets")
     */
    public function postProjetsAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $projet = new Projet();
        $form = $this->createForm(ProjetType::class, $projet);
        $form->submit($request->request->all());

        if ($form->isValid()) {
            $em->persist($projet);
            $em->flush();
            return $projet;
        }
        return $form;
    }

    /**
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT)
     * @Rest\Delete("/projets/{projet_id}")
     */
    public function removeProjetsAction($projet_id) {
        $em = $this->getDoctrine()->getEntityManager();
        $projet = $em->getRepository('AppBundle:Projet')->find($projet_id);
        if ($projet) {
            $em->remove($projet);
            $em->flush();
        }
    }

}
