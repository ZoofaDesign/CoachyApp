<?php

namespace Coachy\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
    
        return $this->render('CoachyAppBundle:Default:index.html.twig');
    
    }

}