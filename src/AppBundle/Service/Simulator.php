<?php

namespace AppBundle\Service;

use AppBundle\Entity\Projet;

class Simulator {

    private $projet;
    private $percent_notaire;
    private $percent_assu_pno;
    private $percent_assu_grl;
    private $prix_renovation;
    private $percent_assu_credit;
    private $ammortissemnt_bien;
    private $ammortissemnt_meuble;

    function __construct($percent_notaire, $percent_assu_pno, $percent_assu_grl, $percent_assu_credit, $ammortissemnt_bien, $ammortissemnt_meuble) {
        $this->percent_notaire = $percent_notaire;
        $this->percent_assu_pno = $percent_assu_pno;
        $this->percent_assu_grl = $percent_assu_grl;
        $this->percent_assu_credit = $percent_assu_credit;
        $this->ammortissemnt_bien = $ammortissemnt_bien;
        $this->ammortissemnt_meuble = $ammortissemnt_meuble;
        $this->prix_renovation = array(
            0 => 0,
            1 => 200,
            2 => 400,
            3 => 700
        );
        $this->projet = new Projet();
    }

    /**
     * retourne une estimation du prix des travaux du projet
     * @return float 
     */
    public function getEstimationPrixTravaux() {
        if ($this->projet->getMontantTravaux() != null)
            return $this->projet->getMontantTravaux();
        return $this->projet->getSurfaceARenover() * $this->prix_renovation[$this->projet->getTypeRenovation()];
    }

    /**
     * retourne une estimation des frais de notaire
     * @return float 
     */
    public function getEstimationFraisNotaire() {
        return $this->projet->getPrixVente() * $this->getPercent_notaire();
    }

    /**
     * retourne le montant à emprunter
     * @return float 
     */
    public function getMontantEmprunt() {
        return $this->projet->getPrixVente() + $this->getEstimationPrixTravaux() + $this->projet->getPrixMeubles() + $this->getEstimationFraisNotaire() - $this->projet->getApport();
    }

    /**
     * retourne le montant annuelle assurance credit
     * @return float 
     */
    private function getMontantAssuranceCredit() {
        return $this->getMontantEmprunt() * $this->getPercent_assu_credit() / 100;
    }

    /**
     * retourne le montant mensuel du crédit hors assurance
     * @return float 
     */
    public function getEstimationCreditHorsAssurance() {
        $sup = $this->getMontantEmprunt() * $this->projet->getTauxCredit() / 1200;
        $inf = (1 + $this->projet->getTauxCredit() / 1200);
        return round($sup / (1 - (float) pow($inf, -$this->projet->getDureeCredit())), 2);
    }

    /**
     * retourne le montant mensuel du crédit hors assurance
     * @return float 
     */
    public function getEstimationCreditAvecAssurance() {
        return $this->getEstimationCreditHorsAssurance() + ($this->getMontantAssuranceCredit() / 12);
    }

    /**
     * retourne le montant mensuel du loyer au m2
     * @return float 
     */
    public function getLoyerM2() {
        return round($this->projet->getLoyerMensuel() / $this->projet->getSurfaceHabitable(), 2);
    }

    /**
     * retourne le montant mensuel du loyer reel
     * @return float 
     */
    public function getLoyerNet() {
        return round(($this->projet->getLoyerMensuel() * $this->projet->getNombreMoisPlein() / 12), 2);
    }

    /**
     * retourne le montant de l'assurance PNO
     * @return float 
     */
    public function getAssurancePNO() {
        return round(($this->getMontantEmprunt() * $this->getPercent_assu_pno()), 2);
    }

    /**
     * retourne le montant de l'assurance GRL
     * @return float 
     */
    public function getAssuranceGRL() {
        return round(($this->projet->getLoyerMensuel() * $this->getPercent_assu_grl()), 2);
    }

    /**
     * retourne le montant annuel du credit
     * @return float 
     */
    public function getCreditAnnuel() {
        return $this->getEstimationCreditAvecAssurance() * 12;
    }

    /**
     * retourne le montant annuel des charges
     * @return float 
     */
    public function getCharges() {
        return $this->getCreditAnnuel() + $this->projet->getTaxeFonciere() + $this->getChargesImposbles();
    }

    /**
     * retourne le montant annuel des recettes
     * @return float 
     */
    public function getRecettes() {
        return $this->projet->getLoyerMensuel() * $this->projet->getNombreMoisPlein();
    }

    /**
     * retourne le montant annuel des intérêts d'emprunt
     * @return float 
     */
    public function getInteretEmprunt() {
        $nb_an = $this->projet->getDureeCredit()/12;
        $credit_an = $this->getMontantEmprunt()/$nb_an;
        $assu_an =  $this->getMontantEmprunt() * $this->getPercent_assu_credit()/100;  
        return $this->getCreditAnnuel() - $credit_an - $assu_an;
    }

    /**
     * retourne le montant annuel de l'amortissement du bien
     * @return float 
     */
    public function getAmmortissemntBien() {
        return round($this->projet->getPrixVente() / $this->getAmmortissemnt_bien(), 2);
    }

    /**
     * retourne le montant annuel de l'amortissement des meubles
     * @return float 
     */
    public function getAmmortissemntMeubles() {
        return round($this->projet->getPrixMeubles() / $this->getAmmortissemnt_meuble(), 2);
    }

    /**
     * retourne le montant des charges imposables
     * @return float 
     */
    public function getChargesImposbles() {
        return $this->projet->getFraisGestion() + $this->projet->getChargesCopropriete() + $this->projet->getChargesEntretien() + $this->getAssuranceGRL() + $this->getAssurancePNO();
    }

    /**
     * retourne le montant de l'abattement de 50% sous le regime BIC
     * @return float 
     */
    public function getAbattement() {
        return $this->getRecettes() / 2;
    }

    /**
     * retourne le montant total des charges sous le regime Reel
     * @return float 
     */
    public function getTotalChargesReel() {
        return $this->getAmmortissemntBien() + $this->getAmmortissemntMeubles() + $this->getChargesImposbles() + $this->getInteretEmprunt();
    }

    /**
     * retourne le montant des impôts sous le regime BIC
     * @return float 
     */
    public function getImpotBIC() {
        return round(($this->getRecettes() - $this->getAbattement()) * 0.455, 2);
    }

    /**
     * retourne le montant des impôts sous le regime Reel
     * @return float 
     */
    public function getImpotReel() {
        if ($this->getResultatReel() > 0)
            return round($this->getResultatReel() * 0.455, 2);
        return 0;
    }

    /**
     * retourne le résultat comptable sous le regime Reel
     * @return float 
     */
    public function getResultatReel() {
        return $this->getRecettes() - $this->getTotalChargesReel();
    }

    /*     * ***GETTERS/SETTERS*** */

    function getProjet() {
        return $this->projet;
    }

    function getPercent_notaire() {
        return $this->percent_notaire;
    }

    function getPercent_assu_pno() {
        return $this->percent_assu_pno;
    }

    function getPercent_assu_grl() {
        return $this->percent_assu_grl;
    }

    function setProjet(Projet $projet) {
        $this->projet = $projet;
    }

    function setPercent_notaire($percent_notaire) {
        $this->percent_notaire = $percent_notaire;
    }

    function setPercent_assu_pno($percent_assu_pno) {
        $this->percent_assu_pno = $percent_assu_pno;
    }

    function setPercent_assu_grl($percent_assu_grl) {
        $this->percent_assu_grl = $percent_assu_grl;
    }

    function getPercent_assu_credit() {
        return $this->percent_assu_credit * 100;
    }

    function setPercent_assu_credit($percent_assu_credit) {
        $this->percent_assu_credit = $percent_assu_credit;
    }

    function getAmmortissemnt_bien() {
        return $this->ammortissemnt_bien;
    }

    function getAmmortissemnt_meuble() {
        return $this->ammortissemnt_meuble;
    }

    function setAmmortissemnt_bien($ammortissemnt_bien) {
        $this->ammortissemnt_bien = $ammortissemnt_bien;
    }

    function setAmmortissemnt_meuble($ammortissemnt_meuble) {
        $this->ammortissemnt_meuble = $ammortissemnt_meuble;
    }

}
