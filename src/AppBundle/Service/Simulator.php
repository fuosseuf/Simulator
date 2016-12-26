<?php

namespace AppBundle\Service;

use AppBundle\Entity\Projet;

class Simulator {

    private $projet;
    private $percent_notaire;
    private $percent_assu_pno;
    private $percent_assu_grl;
    private $prix_renovation;

    function __construct($percent_notaire, $percent_assu_pno, $percent_assu_grl) {
        $this->percent_notaire = $percent_notaire;
        $this->percent_assu_pno = $percent_assu_pno;
        $this->percent_assu_grl = $percent_assu_grl;
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
        return $this->projet->getSurfaceARenover() * $this->prix_renovation[$this->projet->getTypeRenovation()];
    }

    /**
     * retourne le montant à emprunter
     * @return float 
     */
    
    public function getMontantEmprunt() {
        if($this->projet->)
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

}
