<?php

namespace Store\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewsController extends Controller
{
    public function indexAction()
    {

//репозиторий новостей (Repo): создаем объект, хранящий новости, получающий их из таблицы БД
    	$newsRepo = $this->getDoctrine()->getManager()->getRepository('StoreNewsBundle:News'); //вызов метода базового контроллера и получаем объект доктрины, потом вызываем ее метод Manager(). Затем получаем объект репозитория.
        $news = $newsRepo -> findAll(); //записываем в переменную $news все полученные новости из репозитория newsRepo 
        return $this->render('StoreNewsBundle:News:index.html.twig', array('news' => $news));
    }

     public function articleAction($slug)
    {
        $newsRepo = $this->getDoctrine()->getManager()->getRepository('StoreNewsBundle:News');
        $onenew = $newsRepo -> findOneBy(array('slug'=>$slug)); //передается массив с одним элементом slug
        return $this->render('StoreNewsBundle:News:index2.html.twig', array('onenew' => $onenew));
    }
}
