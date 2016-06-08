<?php
/**
 * Created by Michał Nowacki
 * Date: 07.06.2016
 * Time: 16:03
 * Filename: AboutController.php
 */


namespace MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutController extends Controller
{

    public function userAction($name)
    {
        if ($name == null)
            return $this->render('MyBundle:About:index.html.twig', array('name' => $name));

        $user = $this->getDoctrine()
            ->getRepository('MyBundle:User')
            ->findOneByName($name);
        if (!$user) {
            throw $this->createNotFoundException(
                'No user named '.$name.' found '
            );
        }
        else
            return $this->render('MyBundle:About:user.html.twig',  array('user' => $user));
    }
    
    public function detailsAction($name)
    {
        $user = $this->getDoctrine()
            ->getRepository('MyBundle:User')
            ->findOneByName($name);

        return $this->render(
            'MyBundle:About:more.html.twig',
            array('user' => $user)
        );
    }
}