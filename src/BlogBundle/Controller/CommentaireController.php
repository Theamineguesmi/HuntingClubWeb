<?php

namespace BlogBundle\Controller;

use BlogBundle\Entity\Commentaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Commentaire controller.
 *
 * @Route("admin/commentaire")
 */
class CommentaireController extends Controller
{
    /**
     * Lists all commentaire entities.
     *
     * @Route("/", name="commentaire_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // $commentaires = $em->getRepository('BlogBundle:Commentaire')->findBy([], ['id' => 'ASC']);;
        $dql = "SELECT bp FROM BlogBundle:Commentaire bp";
        $query = $em->createQuery($dql);


        $form = $this->createFormbuilder()
            ->add('nbco',ChoiceType::class, [
                'choices'  => [
                    '5' => 5,
                    '10' => 10,
                    '20' => 20,
                    '30' => 30,
                    '50' => 50,
                    '100' => 100,
                ],
                ])

            ->getForm();



        if ($request->request->get('form')['nbco']!=null) {
            $nbcom = $request->request->get('form')['nbco'];
        }
        else {
            $nbcom=5;
        }
            dump($nbcom);



        $paginator=$this->get('knp_paginator');
        $result = $paginator->paginate(
            $query,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',$nbcom)
        );


        return $this->render('commentaire/index.html.twig', array(
            'commentaires' => $result,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new commentaire entity.
     *
     * @Route("/new", name="commentaire_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $commentaire = new Commentaire();
        $form = $this->createForm('BlogBundle\Form\CommentaireType', $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $today = date("F j, Y");
            $commentaire->setDateAjout($today);
            $em->persist($commentaire);
            $em->flush();

            return $this->redirectToRoute('commentaire_show', array('id' => $commentaire->getId()));
        }

        return $this->render('commentaire/new.html.twig', array(
            'commentaire' => $commentaire,
            'form' => $form->createView(),
        ));
    }



    /**
     * Finds and displays a commentaire entity.
     *
     * @Route("/{id}", name="commentaire_show")
     * @Method("GET")
     */
    public function showAction(Commentaire $commentaire)
    {
        $deleteForm = $this->createDeleteForm($commentaire);

        return $this->render('commentaire/show.html.twig', array(
            'commentaire' => $commentaire,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing commentaire entity.
     *
     * @Route("/{id}/edit", name="commentaire_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Commentaire $commentaire)
    {
        $deleteForm = $this->createDeleteForm($commentaire);
        $editForm = $this->createForm('BlogBundle\Form\CommentaireType', $commentaire);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $commentaire->setIdArticle($commentaire->getIdArticle());
            $commentaire->setIdUser($commentaire->getIdUser());
            $today = date("F j, Y");
            $commentaire->setDateModif($today);
            $commentaire->setDateAjout($commentaire->getDateAjout());
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('commentaire_edit', array('id' => $commentaire->getId()));
        }

        return $this->render('commentaire/edit.html.twig', array(
            'commentaire' => $commentaire,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a commentaire entity.
     *
     * @Route("/{id}/delete", name="commentaire_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Commentaire $commentaire, $id)
    {

        $commentaire = $this->getDoctrine()->getRepository(Commentaire::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($commentaire);
        $em->flush();


        return $this->redirectToRoute('commentaire_index');
    }


    /**
     * Creates a form to delete a commentaire entity.
     *
     * @param Commentaire $commentaire The commentaire entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Commentaire $commentaire)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('commentaire_delete', array('id' => $commentaire->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
