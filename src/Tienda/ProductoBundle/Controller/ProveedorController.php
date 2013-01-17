<?php

namespace Tienda\ProductoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tienda\ProductoBundle\Entity\Proveedor;
use Tienda\ProductoBundle\Form\ProveedorType;

/**
 * Proveedor controller.
 *
 */
class ProveedorController extends Controller
{
    /**
     * Lists all Proveedor entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProductoBundle:Temporada')->findAll();

        return $this->render('ProductoBundle:Default:temporada.json.twig', array(
            'temporadas' => $entities,
        ));
    }

    /**
     * Finds and displays a Proveedor entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductoBundle:Proveedor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Proveedor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProductoBundle:Proveedor:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Proveedor entity.
     *
     */
    public function newAction()
    {
        $entity = new Proveedor();
        $form   = $this->createForm(new ProveedorType(), $entity);

        return $this->render('ProductoBundle:Proveedor:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Proveedor entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Proveedor();
        $form = $this->createForm(new ProveedorType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('proveedor_show', array('id' => $entity->getId())));
        }

        return $this->render('ProductoBundle:Proveedor:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Proveedor entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductoBundle:Proveedor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Proveedor entity.');
        }

        $editForm = $this->createForm(new ProveedorType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProductoBundle:Proveedor:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Proveedor entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductoBundle:Proveedor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Proveedor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ProveedorType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('proveedor_edit', array('id' => $id)));
        }

        return $this->render('ProductoBundle:Proveedor:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Proveedor entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ProductoBundle:Proveedor')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Proveedor entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('proveedor'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
