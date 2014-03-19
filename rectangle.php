<?php
/**
 * Classe créant le rectangle
 * @author Dimitri Champonnois
 * @author Erwan Paumard
 */
class rectangle {
    
    /**
     * @param int $verticale 
     * @param int $horizontale
     * @param string $couleur 
     * @param int $largeur
     * @param int $hauteur
     * @param string $couleurfond
     */
    private $verticale;
    private $horizontale;
    private $largeur;
    private $hauteur;
    private $couleur;
    private $couleurfond;
    
    /**
     * Créer le rectangle à partir des variables d'entrées
     * 
     * @param int $verticale Indication de la position verticale du point d'origine du rectangle
     * @param int $horizontale Indication de la position horizontale du point d'origine du rectangle
     * @param string $couleur Indication de la couleur de la bordure rectangle
     * @param int $largeur Indication de la largeur du du rectangle
     * @param int $hauteur Indication de la hauteur du du rectangle
     * @param string $couleurfond Indication de la couleur de fond du rectangle
     */
    function rectangle($verticale, $horizontale, $couleur,$largeur,$hauteur,$couleurfond) {
        $this->verticale = $verticale;
        $this->horizontale = $horizontale;
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
        $this->couleur = $couleur;
        $this->couleurfond = $couleurfond;
    }
    
    /**
     * Permet de récupérer la position verticale
     * 
     * @return int
     */
    public function getVerticale() {
        return $this->verticale;
    }
    
    /**
     * Permet de récupérer la position horizontale
     * 
     * @return int
     */
    public function getHorizontale() {
        return $this->horizontale;
    }
    
    /**
     * Permet de récupérer la largeur
     * 
     * @return int
     */
    public function getLargeur() {
        return $this->largeur;
    }
    
    /**
     * Permet de récupérer la hauteur
     * 
     * @return int
     */
    public function getHauteur() {
        return $this->hauteur;
    }
    
    /**
     * Permet de récupérer la couleur de la bordure
     * 
     * @return String
     */
    public function getCouleur() {
        return $this->couleur;
    }
    
    /**
     * Permet de récupérer la couleur de fond
     * 
     * @return String
     */
    public function getCouleurFond() {
        return $this->couleurfond;
    }
    
    /**
     * Permet de changer la position verticale
     * 
     * @param int $verticale
     */
    public function setVerticale($verticale) {
        $this->verticale = $verticale;
    }
    
    /**
     * Permet de changer la position horizontale
     * 
     * @param int $horizontale
     */
    public function setHorizontale($horizontale) {
        $this->horizontale = $horizontale;
    }
    
    /**
     * Permet de changer la largeur
     * 
     * @param int $largeur
     */
    public function setLargeur($largeur) {
        $this->largeur=$largeur;
    }

    /**
     * Permet de changer la hauteur
     * 
     * @param int $hauteur
     */
    public function setHauteur($hauteur) {
        $this->hauteur=$hauteur;
    }
    
    /**
     * Permet de changer la couleur de la bordure
     * 
     * @param String $couleur
     */
    public function setCouleur($couleur) {
      $this->couleur = $couleur;
    }
    
    /**
     * Permet de changer la couleur du fond
     * 
     * @param String $couleurfond
     */
    public function setCouleurFond($couleurfond) {
      $this->couleurfond = $couleurfond;
    }
    
    /**
     * Afficher le rectangle
     */
    public function afficher(){

        echo '<div style=" background-color:'.$this->couleurfond.'; position:absolute; top:'. $this->verticale.'px; left:'. $this->horizontale.'px; border:8px solid '.$this->couleur.' ;width:'.$this->largeur.'px; height:'.$this->hauteur.'px"></div>';

    }
    
}