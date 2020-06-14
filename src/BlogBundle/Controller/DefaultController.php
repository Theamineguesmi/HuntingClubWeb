<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use BlogBundle\Entity\User;
use BlogBundle\Entity\Article;
use BlogBundle\Entity\Commentaire;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
class DefaultController extends Controller
{
    /**
     *
     * @Route("/find/{id}", name="find_id")
     */
    public function findAction ($id)
    {
        $tasks = $this->getDoctrine()->getManager()
            ->getRepository(User::class)
            ->findOneBy(['username' => $id]);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($tasks);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/send-notification", name="send_notification")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function sendNotification(Request $request)
    {
        $manager = $this->get('mgilet.notification');
        $notif = $manager->createNotification('Hello world !');
        $notif->setMessage('This a notification.');
        $notif->setLink('http://symfony.com/');
        // or the one-line method :
        // $manager->createNotification('Notification subject','Some random text','http://google.fr');

        // you can add a notification to a list of entities
        // the third parameter ``$flush`` allows you to directly flush the entities
        $manager->addNotification(array($this->getUser()), $notif, true);

        return $this->redirectToRoute('homepage');
    }

    /**
     *
     * @Route("/create?contenu={idE}&idUser={idU}&idArticle={idA}", name="all_res")
     * @Method("GET")
     */
    public function emprunterAction(Request $request)
    {
        $id = $request->get('idE');
        $iduser=$request->get('idU');
        $idArticle=$request->get('idA');
        //$token = $request->get('idUser');
        $entitymanager = $this->getDoctrine()->getManager();
        $p= $em->getRepository('BlogBundle:Article')->find($idArticle);
        $user = $entitymanager->getRepository(User::class)->find($iduser);
        $entitymanager = $this->getDoctrine()->getManager();
        $em=$this->getDoctrine()->getManager();
        $commentaires = new Commentaire();


        $user = $this->getUser();

        $commentaires->setIdArticle($p->getId());
        $today = date("F j, Y");
        $commentaires->setDateAjout($today);
        $commentaires->setIdUser($user);
        $commentaires->setNbjaime(0);
        $em = $this->getDoctrine()->getManager();
        // $article->UploadProfilePicture();
        $em->persist($commentaires);
        $em->flush();

        $serializer = new Serializer([new DateTimeNormalizer('d.m.Y'), new ObjectNormalizer()]);
        $formatted = $serializer->normalize($commentaires);
        return new JsonResponse($formatted);
    }



}
