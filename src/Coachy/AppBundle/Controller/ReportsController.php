<?php

namespace Coachy\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReportsController extends Controller {

    public function indexAction() {
    
        return $this->render('CoachyAppBundle:Reports:index.html.twig');
    
    }

}