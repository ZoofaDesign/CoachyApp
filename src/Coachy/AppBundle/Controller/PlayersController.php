<?php

namespace Coachy\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlayersController extends Controller {

    public function indexAction() {
    
        return $this->render('CoachyAppBundle:Players:index.html.twig');
    
    }

}