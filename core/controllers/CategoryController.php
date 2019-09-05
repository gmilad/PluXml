<?php

/**
 * CategoryController show all articles from the same category
 * @package PLX
 * @author	Pedro "P3ter" CADETE
 **/

namespace controllers;

class CategoryController extends IndexController {

    public function __construct(){
        // This page don't need user authentification
        $this->setAuthPage(true);
        parent::__construct();
    }

    /**
     * Index action call the view from the selected theme
     * @author Pedro "P3ter" CADETE
     */
    public function indexAction() {
        $plxMotor = $this->getPlxMotor();
        $plxShow = $this->getPlxShow();
        require_once $this->getUserThemePath() . 'categorie.php';
    }
}
