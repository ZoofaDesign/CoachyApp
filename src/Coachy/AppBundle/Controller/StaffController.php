<?php

namespace Coachy\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StaffController extends Controller {

    public function indexAction() {
    
        return $this->render('CoachyAppBundle:Staff:index.html.twig');
    
    }

}