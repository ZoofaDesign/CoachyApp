<?php

namespace Coachy\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InfirmaryController extends Controller {

    public function indexAction() {
    
        return $this->render('CoachyAppBundle:Infirmary:index.html.twig');
    
    }

}