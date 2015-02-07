<?php

namespace Store\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OnenewController extends Controller
{
    public function indexAction()
    {
        $newsRepo = $this->getDoctrine()->getManager()->getRepository('StoreNewsBundle:News');
        $onenew = $newsRepo -> findAll();
        return $this->render('StoreNewsBundle:Default:index2.html.twig', array('onenew' => $onenew));
    }
}
