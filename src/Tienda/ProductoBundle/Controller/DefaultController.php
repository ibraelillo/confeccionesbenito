<?php

namespace Tienda\ProductoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProductoBundle:Default:index.html.twig');
    }

    public function temporadasAction()
    {
        $em = $this->getDoctrine()->getManager();

        $temps = $em->getRepository('ProductoBundle:Temporada')->findAll();

        $temporadas = array();

        foreach ($temps as $t)
        {
            $temporadas[$t->getAnno()][] = $t;

        }
        return $this->render('ProductoBundle:Default:temporadas.html.twig', array(
            'temporadas' => $temporadas
        ));
    }

    public function temporadaJsonAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProductoBundle:Temporada')->findAll();

        return $this->render('ProductoBundle:Default:temporada.json.twig', array(
            'temporadas' => $entities,
        ));
    }

    public function familiaAction()
    {
        $em = $this->getDoctrine()->getManager();

        $familias= $em->getRepository('ProductoBundle:Familia')->findAll();



        return $this->render('ProductoBundle:Default:temporadas.html.twig', array(
            'temporadas' => $temporadas
        ));
    }
}
