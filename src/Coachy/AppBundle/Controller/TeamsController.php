<?php

namespace Coachy\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TeamsController extends Controller {

    public function indexAction() {
    
        return $this->render('CoachyAppBundle:Teams:index.html.twig');
    
    }

}