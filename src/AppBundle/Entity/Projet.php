<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table(name="projet")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjetRepository")
 */
class Projet {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptif", type="text", nullable=true)
     */
    private $descriptif;

    /**
     * @var float
     *
     * @ORM\Column(name="surface", type="float")
     */
    private $surface;

    /**
     * @var float
     *
     * @ORM\Column(name="surface_habitable", type="float")
     */
    private $surfaceHabitable;

    /**
     * @var float
     *
     * @ORM\Column(name="surface_a_renover", type="float")
     */
    private $surfaceARenover;

    /**
     * @var int
     *
     * @ORM\Column(name="type_renovation", type="integer")
     */
    private $typeRenovation;

    /**
     * @var float
     *
     * @ORM\Column(name="apport", type="float")
     */
    private $apport;

    /**
     * @var float
     *
     * @ORM\Column(name="taxe_fonciere", type="float")
     */
    private $taxeFonciere;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_travaux", type="float", nullable=true)
     */
    private $montantTravaux;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_meubles", type="float")
     */
    private $prixMeubles;

    /**
     * @var float
     *
     * @ORM\Column(name="taux_credit", type="float")
     */
    private $tauxCredit;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_vente", type="float")
     */
    private $prixVente;

    /**
     * @var int
     *
     * @ORM\Column(name="duree_credit", type="integer")
     */
    private $dureeCredit;

    /**
     * @var float
     *
     * @ORM\Column(name="loyer_mensuel", type="float")
     */
    private $loyerMensuel;

    /**
     * @var int
     *
     * @ORM\Column(name="nombre_mois_plein", type="integer")
     */
    private $nombreMoisPlein;

    /**
     * @var float
     *
     * @ORM\Column(name="charges_copropriete", type="float")
     */
    private $chargesCopropriete;

    /**
     * @var float
     *
     * @ORM\Column(name="charges_entretien", type="float")
     */
    private $chargesEntretien;

    /**
     * @var float
     *
     * @ORM\Column(name="frais_gestion", type="float")
     */
    private $fraisGestion;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_annonce", type="string", length=255)
     */
    private $lienAnnonce;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_achat", type="datetime", nullable=true)
     */
    private $dateAchat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime")
     */
    private $dateCreation;

    /**
     * @var int
     *
     * @ORM\Column(name="age_bien", type="integer", nullable=true)
     */
    private $ageBien;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Projet
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set descriptif
     *
     * @param string $descriptif
     *
     * @return Projet
     */
    public function setDescriptif($descriptif) {
        $this->descriptif = $descriptif;

        return $this;
    }

    /**
     * Get descriptif
     *
     * @return string
     */
    public function getDescriptif() {
        return $this->descriptif;
    }

    /**
     * Set surface
     *
     * @param float $surface
     *
     * @return Projet
     */
    public function setSurface($surface) {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get surface
     *
     * @return float
     */
    public function getSurface() {
        return $this->surface;
    }

    /**
     * Set surfaceHabitable
     *
     * @param float $surfaceHabitable
     *
     * @return Projet
     */
    public function setSurfaceHabitable($surfaceHabitable) {
        $this->surfaceHabitable = $surfaceHabitable;

        return $this;
    }

    /**
     * Get surfaceHabitable
     *
     * @return float
     */
    public function getSurfaceHabitable() {
        return $this->surfaceHabitable;
    }

    /**
     * Set surfaceARenover
     *
     * @param float $surfaceARenover
     *
     * @return Projet
     */
    public function setSurfaceARenover($surfaceARenover) {
        $this->surfaceARenover = $surfaceARenover;

        return $this;
    }

    /**
     * Get surfaceARenover
     *
     * @return float
     */
    public function getSurfaceARenover() {
        return $this->surfaceARenover;
    }

    /**
     * Set typeRenovation
     *
     * @param integer $typeRenovation
     *
     * @return Projet
     */
    public function setTypeRenovation($typeRenovation) {
        $this->typeRenovation = $typeRenovation;

        return $this;
    }

    /**
     * Get typeRenovation
     *
     * @return int
     */
    public function getTypeRenovation() {
        return $this->typeRenovation;
    }

    /**
     * Set apport
     *
     * @param float $apport
     *
     * @return Projet
     */
    public function setApport($apport) {
        $this->apport = $apport;

        return $this;
    }

    /**
     * Get apport
     *
     * @return float
     */
    public function getApport() {
        return $this->apport;
    }

    /**
     * Set montantTravaux
     *
     * @param float $montantTravaux
     *
     * @return Projet
     */
    public function setMontantTravaux($montantTravaux) {
        $this->montantTravaux = $montantTravaux;

        return $this;
    }

    /**
     * Get montantTravaux
     *
     * @return float
     */
    public function getMontantTravaux() {
        return $this->montantTravaux;
    }

    /**
     * Set prixMeubles
     *
     * @param float $prixMeubles
     *
     * @return Projet
     */
    public function setPrixMeubles($prixMeubles) {
        $this->prixMeubles = $prixMeubles;

        return $this;
    }

    /**
     * Get prixMeubles
     *
     * @return float
     */
    public function getPrixMeubles() {
        return $this->prixMeubles;
    }

    /**
     * Set tauxCredit
     *
     * @param float $tauxCredit
     *
     * @return Projet
     */
    public function setTauxCredit($tauxCredit) {
        $this->tauxCredit = $tauxCredit;

        return $this;
    }

    /**
     * Get tauxCredit
     *
     * @return float
     */
    public function getTauxCredit() {
        return $this->tauxCredit;
    }

    /**
     * Set prixVente
     *
     * @param float $prixVente
     *
     * @return Projet
     */
    public function setPrixVente($prixVente) {
        $this->prixVente = $prixVente;

        return $this;
    }

    /**
     * Get prixVente
     *
     * @return float
     */
    public function getPrixVente() {
        return $this->prixVente;
    }

    /**
     * Set dureeCredit
     *
     * @param integer $dureeCredit
     *
     * @return Projet
     */
    public function setDureeCredit($dureeCredit) {
        $this->dureeCredit = $dureeCredit;

        return $this;
    }

    /**
     * Get dureeCredit
     *
     * @return int
     */
    public function getDureeCredit() {
        return $this->dureeCredit;
    }

    /**
     * Set loyerMensuel
     *
     * @param float $loyerMensuel
     *
     * @return Projet
     */
    public function setLoyerMensuel($loyerMensuel) {
        $this->loyerMensuel = $loyerMensuel;

        return $this;
    }

    /**
     * Get loyerMensuel
     *
     * @return float
     */
    public function getLoyerMensuel() {
        return $this->loyerMensuel;
    }

    /**
     * Set nombreMoisPlein
     *
     * @param integer $nombreMoisPlein
     *
     * @return Projet
     */
    public function setNombreMoisPlein($nombreMoisPlein) {
        $this->nombreMoisPlein = $nombreMoisPlein;

        return $this;
    }

    /**
     * Get nombreMoisPlein
     *
     * @return int
     */
    public function getNombreMoisPlein() {
        return $this->nombreMoisPlein;
    }

    /**
     * Set chargesCopropriete
     *
     * @param float $chargesCopropriete
     *
     * @return Projet
     */
    public function setChargesCopropriete($chargesCopropriete) {
        $this->chargesCopropriete = $chargesCopropriete;

        return $this;
    }

    /**
     * Get chargesCopropriete
     *
     * @return float
     */
    public function getChargesCopropriete() {
        return $this->chargesCopropriete;
    }

    /**
     * Set chargesEntretien
     *
     * @param float $chargesEntretien
     *
     * @return Projet
     */
    public function setChargesEntretien($chargesEntretien) {
        $this->chargesEntretien = $chargesEntretien;

        return $this;
    }

    /**
     * Get chargesEntretien
     *
     * @return float
     */
    public function getChargesEntretien() {
        return $this->chargesEntretien;
    }

    /**
     * Set fraisGestion
     *
     * @param float $fraisGestion
     *
     * @return Projet
     */
    public function setFraisGestion($fraisGestion) {
        $this->fraisGestion = $fraisGestion;

        return $this;
    }

    /**
     * Get fraisGestion
     *
     * @return float
     */
    public function getFraisGestion() {
        return $this->fraisGestion;
    }

    /**
     * Set lienAnnonce
     *
     * @param string $lienAnnonce
     *
     * @return Projet
     */
    public function setLienAnnonce($lienAnnonce) {
        $this->lienAnnonce = $lienAnnonce;

        return $this;
    }

    /**
     * Get lienAnnonce
     *
     * @return string
     */
    public function getLienAnnonce() {
        return $this->lienAnnonce;
    }

    /**
     * Set dateAchat
     *
     * @param \DateTime $dateAchat
     *
     * @return Projet
     */
    public function setDateAchat($dateAchat) {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    /**
     * Get dateAchat
     *
     * @return \DateTime
     */
    public function getDateAchat() {
        return $this->dateAchat;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Projet
     */
    public function setDateCreation($dateCreation) {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation() {
        return $this->dateCreation;
    }

    /**
     * Set ageBien
     *
     * @param integer $ageBien
     *
     * @return Projet
     */
    public function setAgeBien($ageBien) {
        $this->ageBien = $ageBien;

        return $this;
    }

    /**
     * Get ageBien
     *
     * @return int
     */
    public function getAgeBien() {
        return $this->ageBien;
    }


    /**
     * Set taxeFonciere
     *
     * @param float $taxeFonciere
     *
     * @return Projet
     */
    public function setTaxeFonciere($taxeFonciere)
    {
        $this->taxeFonciere = $taxeFonciere;

        return $this;
    }

    /**
     * Get taxeFonciere
     *
     * @return float
     */
    public function getTaxeFonciere()
    {
        return $this->taxeFonciere;
    }
}
