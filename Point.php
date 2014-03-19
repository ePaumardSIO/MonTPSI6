<?php
/**
 * Classe créant le point
 * 
 * @author Dimitri Champonnois
 * @author Erwan Paumard
 */
class Point {
    /**
     * @param int $verticale 
     * @param int $horizontale
     * @param string $couleur
     */
    private $verticale;
    private $horizontale;
    private $couleur;
    
    /**
     * Créer le point à partir des variables d'entrées
     * 
     * @param int $verticale Indication de la position verticale du point
     * @param int $horizontale Indication de la position horizontale du point
     * @param String $couleur Indication de la couleur du point
     */
    function Point($verticale, $horizontale, $couleur) {
        $this->verticale = $verticale;
        $this->horizontale = $horizontale;
        $this->couleur = $couleur;
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
     * Permet de récupérer la couleur
     * 
     * @return String
     */
    public function getCouleur() {
        return $this->couleur;
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
     * Permet de changer la couleur
     * 
     * @param String $couleur
     */
    public function setCouleur($couleur) {
      $this->couleur = $couleur;
    }
    
    /**
     * Modifie la position avec le décalage
     * 
     * @param int $dverticale
     * @param int $dhorizontale
     */
    public function decale($dverticale, $dhorizontale){
        $this->verticale = $this->verticale+$dverticale;
        $this->horizontale = $this->horizontale+$dhorizontale;
    }
    
    /**
     * Afficher le rectangle
     */
    public function afficher(){
        echo '<p  style=" color:'.$this->couleur.'; position:absolute; top:'. $this->verticale.'px; left:'. $this->horizontale.'px;">*</p>';

        

        
    }
}
